<?php

function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];

    if((empty($first_img)) || ($first_img == '')){
        // 記事内で画像がなかったときのためのデフォルト画像を指定
         $first_img = get_template_directory_uri().'/images/top/works.png' ;
    }
    return $first_img;
}
function the_pagination() {
  global $wp_query;
  $bignum = 999999999;
  if ( $wp_query->max_num_pages <= 1 )
    return;
  echo '<nav class="pagination">';
  echo paginate_links( array(
    'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
    'format'       => '',
    'current'      => max( 1, get_query_var('paged') ),
    'total'        => $wp_query->max_num_pages,
    'prev_text'    => '&larr;',
    'next_text'    => '&rarr;',
    'type'         => 'list',
    'end_size'     => 3,
    'mid_size'     => 3
  ) );
  echo '</nav>';
}




/**
 * Contact Form 7のエラーメッセージの場所を必要な項目のみ変更します。
 */
function wpcf7_custom_item_error_position( $items, $result ) {
	// メッセージを表示させたい場所のタグのエラー用のクラス名
	$class = 'wpcf7-not-valid-tip';
    $role="alert";
	// メッセージの位置を変更したい項目名
	$names = array( 'your-name' );

	// 入力エラーがある場合
	if ( isset( $items['invalids'] ) ) {
		foreach ( $items['invalids'] as $k => $v ) {
			$orig = $v['into'];
			$name = substr( $orig, strrpos($orig, ".") + 1 );
			// 位置を変更したい項目のみ、エラーを設定するタグのクラス名を差替
			if ( in_array( $name, $names ) ) {
				$items['invalids'][$k]['into'] = ".{$class}.{$name}";
			}
		}
	}
	return $items;
}

add_filter( 'wpcf7_ajax_json_echo', 'wpcf7_custom_item_error_position', 10, 2 );

add_filter( 'wpcf7_validate_email', 'wpcf7_text_validation_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_text_validation_filter_extend', 11, 2 );
function wpcf7_text_validation_filter_extend( $result, $tag ) {
global $my_email_confirm;
$tag = new WPCF7_Shortcode( $tag );
$name = $tag->name;
$value = isset( $_POST[$name] )
? trim( wp_unslash( strtr( (string) $_POST[$name], "\n", " " ) ) )
: '';
if ($name == "your-email"){
$my_email_confirm=$value;
}
if ($name == "your-email_confirm" && $my_email_confirm != $value){
$result->invalidate( $tag,"確認用のメールアドレスが一致していません");
}

return $result;
}

add_filter( 'use_block_editor_for_post_type', 'hide_block_editor', 10, 10 );
function hide_block_editor( $use_block_editor, $post_type ) {
  if ( $post_type === 'page' ) return false;
  if ( $post_type === 'club_activities' ) return false;
  if ( $post_type === 'bunkabu' ) return false;
  if ( $post_type === 'school_management_ye' ) return false;
  if ( $post_type === 'practice_activities' ) return false;
  return $use_block_editor;
}
// contact form 7 バリデーション追加
function wpcf7_validate_customize($result, $tags)
{
    foreach ($tags as $tag) {
        //タグの種類 input・textareaなど
        $type = $tag['type'];
        // name属性
        $name = $tag['name'];
       // $post = trim(strtr((string) $_POST[$name], "\n", ''));
        if($type === 'checkbox'){
            if ($name == 'agreement' && !isset($_POST[$name])) {
                // 指定のname属性のバリデーションに任意のメッセージを追加
                $result->invalidate($name, 'プライバシーポリシーに同意してください。');
            }
        }
    }    return $result;
}




add_filter('wpcf7_validate', 'wpcf7_validate_customize', 11, 3);
//メッセージ エーラ
function custom_mwform_error_message($error, $key, $rule)
{
  if ($key === 'name' && $rule === 'noempty') {
    return '名前を入力してください。';
  }
  if ($key === 'email' && $rule === 'noempty') {
    return 'メールアドレスを入力してください。';
  }
  if ($key === 'inquiry' && $rule === 'noempty') {
    return 'お問い合わせ内容を入力してください。';
  }
  if ($key === 'agree' && $rule === 'required') {
    return '個人情報取り扱いについて同意するをチェックしてください。';
  }
  if ($key === 'inquiry_list' && $rule === 'noempty') {
    return 'お問い合わせ内容を選んでください。';
  }
  return $error;
}
add_filter( 'mwform_error_message_mw-wp-form-34','custom_mwform_error_message', 10, 3 );

//パラメータ 
function my_mwform_value($value, $name) {
  if ($name === 'inquiry_list' && !empty($_GET['inquiry']) && !is_array($_GET['inquiry'])) {
    return $_GET['inquiry'];
  }
  return $value;
}
add_filter('mwform_value_mw-wp-form-34', 'my_mwform_value', 10, 2);

add_theme_support( 'title-tag' );

//work next
function echo_next_previous_post_link($fmg_name="link" ,$selector="next")
{  

if ($selector=="next") {
    $next_post_obj  = get_adjacent_post( '', '', false );
    $next_post_ID   = isset( $next_post_obj->ID ) ? $next_post_obj->ID : '';
    $next_post_link     = get_permalink( $next_post_ID );
    $next_post_title = get_the_title($next_post_ID);
    $image_id = get_post_meta($next_post_ID, 'img-1', true);
    $size = 'medium_large';
    $thumbnail_url = wp_get_attachment_image_src($image_id, $size, false);
    if ($thumbnail_url) {
        $next_image_url = $thumbnail_url[0];
    }
    // $next_image_url = wp_get_attachment_url($image_id);
    if ($fmg_name=="link") {
        echo $next_post_link ;
    }
    elseif($fmg_name=="url"){
      echo $next_image_url ;
    }
    else {
        echo $next_post_title ;
    }
}
else {
    $previous_post_obj  = get_adjacent_post( '', '', true );
    $previous_post_ID   = isset( $previous_post_obj->ID ) ? $previous_post_obj->ID : '';
    $previous_post_link     = get_permalink( $previous_post_ID );
    $previous_post_title = get_the_title($previous_post_ID);
    $image_id = get_post_meta($previous_post_ID, 'img-1', true);
    $size = 'medium';
    $thumbnail_url = wp_get_attachment_image_src($image_id, $size, false);
    if ($thumbnail_url) {
        $previous_image_url = $thumbnail_url[0];
    }
    // $previous_image_url = wp_get_attachment_url($image_id);
    if ($fmg_name=="link") {
        echo $previous_post_link ;
    }
    elseif($fmg_name=="url"){
      echo $previous_image_url ;
    }
    else {
        echo $previous_post_title ;
    }
}

}

if ( ! function_exists( 'wplift_pagination' ) ) {
 function wplift_pagination() {
 global $the_query;
 $big = 999999999;
 echo paginate_links( array(
 'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
 'format' => '?paged=%#%',
 'current' => max( 1, get_query_var('paged') ),
 'prev_text'    => '<span class="span-pagination-back"></span>',
 'next_text'    => '<span class="span-pagination"></span>',
 'total' => $the_query->max_num_pages ) );
 }
}