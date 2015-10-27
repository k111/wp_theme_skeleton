<?php // カスタム投稿タイプ(service)記事テンプレート
get_header(); ?>

<div class="row">
<div class="col-md-9">
<article>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h1 class="page-header"><?php the_title(); ?></h1>

<?php the_content(); ?>


<table class="table">

<tr>
<th>textフィールド</th>
<td>
<?php // textフィールドを表示
if(types_render_field('service_text'))
echo types_render_field('service_text',array(
                        'output' => 'normal'));
?>
</td>
</tr>

<tr>
<th>textareaフィールド</th>
<td>
<?php // textareaフィールドを表示
if(types_render_field('serivce_textarea'))
echo types_render_field('serivce_textarea',array(
                        'output' => 'normal'));
?>
</td>
</tr>

<tr>
<th>wysiwygフィールド</th>
<td>
<?php // wysiwygフィールドを表示
if(types_render_field('service_wysiwyg'))
echo types_render_field('service_wysiwyg',array(
                        'output' => 'normal'));
?>
</td>
</tr>

<tr>
<th>画像フィールド</th>
<td>
<?php // 画像フィールドを表示
if(types_render_field('service_image'))
echo types_render_field('service_image',array(
                        'size' => 'medium'));
?>
</td>
</tr>

<tr>
<th>日付フィールド</th>
<td>
<?php // 日付フィールドを表示
if(types_render_field('service_startdate'))
echo types_render_field('service_startdate',array(
                        'output' => 'normal',
                        'format' => 'Y年m月d日H:i'));
?>
</td>
</tr>

<tr>
<th>URLフィールド</th>
<td>
<?php // urlフィールドを表示
if(types_render_field('service_url'))
echo types_render_field('service_url',array(
                      'output' => 'html',
                      'target' => '_blank'));
?>
</td>
</tr>

<tr>
<th>checkboxフィールド</th>
<td>
<?php // checkboxフィールド
if(types_render_field('service_checkbox'))
echo 'check済み';
?>
</td>
</tr>

<tr>
<th>checkboxグループフィールド</th>
<td>
<?php // checkboxグループフィールドを表示
if(types_render_field('service_checkbox2'))
echo '<ul>';
echo '<li>';
echo types_render_field('service_checkbox2',array(
                      'output' => 'normal',
                      'separator' => '</li><li>'));
echo '</li>';
echo '</ul>';
?>
</td>
</tr>

<tr>
<th>radioフィールド</th>
<td>
<?php // radioフィールドを表示
if(types_render_field('service_radio'))
echo types_render_field('service_radio',array(
                      'output' => 'normal'));
?>
</td>
</tr>

<tr>
<th>emailフィールド</th>
<td>
<?php // emailフィールドを表示
if(types_render_field('service_mail'))
echo types_render_field('service_mail',array(
                      'output' => 'normal'));
?>
</td>
</tr>

<tr>
<th>数値フィールド</th>
<td>
<?php // 数値フィールドを表示
if(types_render_field('service_num'))
echo types_render_field('service_num',array(
                      'output' => 'normal'));
?>
</td>
</tr>

<tr>
<th>selectフィールド</th>
<td>
<?php // selectフィールドを表示
if(types_render_field('service_select'))
echo types_render_field('service_select',array(
                      'output' => 'normal'));
?>
</td>
</tr>
</table>



<?php endwhile; else : ?>
<p>投稿が見つかりませんでした。</p>
<?php endif; ?>


</article>

<!-- /.col-md-9 --></div>



<!-- /.row --></div>


<?php get_footer(); ?>

</body>
</html>
