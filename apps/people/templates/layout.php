<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="wrap">
      <div id="header">
        <h1>Dockers</h1>
      </div>
      <div id="nav">
        <ul>
          <li><a href="#">Members</a>
            <ul>
              <li><?php echo link_to('Members list', 'member/index') ?></li>
              <li><?php echo link_to('New member', 'member/new') ?></li>
            </ul>
          </li>
          <li><a href="#">Licenses</a>
            <ul>
              <li><a href="#">Licenses list</a></li>
              <li><a href="#">New license</a></li>
            </ul>
          </li>
          <li><a href="#">Players</a>
            <ul>
              <li><a href="#">Players list</a></li>
              <li><a href="#">New player</a></li>
            </ul>
          </li>
          <li><a href="#">Coaches</a>
            <ul>
              <li><a href="#">Coaches list</a></li>
              <li><a href="#">New coach</a></li>
            </ul>
          </li>
          <li><a href="#">Staff</a>
            <ul>
              <li><a href="#">Staff list</a></li>
              <li><a href="#">New staff member</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div id="main">
	<h2><?php include_slot('section_title') ?></h2>
	<div id="content">
          <?php echo $sf_content ?>
	</div>
      </div>
    </div>
  <div id="footer">
    <p>Footer</p>
  </div>
  </body>
</html>
