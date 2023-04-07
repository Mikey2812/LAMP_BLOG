<?php include_once 'views/admin/layout/'.$this->layout.'top.php'; ?>

<?php vendor_html_helper::contentheader('Posts <small>management</small>', [
    [
      'title' =>  'Posts',
      'urlp'=>['ctl'=>$app['ctl']]],
    [
      'title' =>  'Detail of Post '.$this->record['id'],
      'urlp'  =>  ['ctl'=>$app['ctl'], 'act'=>$app['act']]
    ]
]); ?>

<section class="content">
    <div class="container-fluid">
        <?php include_once 'views/admin/posts/_form.php'; ?>
    </div>
</section>

<?php include_once 'views/admin/layout/'.$this->layout.'footer.php'; ?>
<?php exit(); ?>