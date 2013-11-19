<<<<<<< HEAD



=======
<?php
/**
 * Dokuwiki installation assistance
 *
 * @author      Chris Smith <chris@jalakai.co.uk>
 */

if(!defined('DOKU_INC')) define('DOKU_INC',dirname(__FILE__).'/');
if(!defined('DOKU_CONF')) define('DOKU_CONF',DOKU_INC.'conf/');
if(!defined('DOKU_LOCAL')) define('DOKU_LOCAL',DOKU_INC.'conf/');

require_once(DOKU_INC.'inc/PassHash.class.php');

// check for error reporting override or set error reporting to sane values
if (!defined('DOKU_E_LEVEL')) { error_reporting(E_ALL ^ E_NOTICE); }
else { error_reporting(DOKU_E_LEVEL); }

// kill magic quotes
if (get_magic_quotes_gpc() && !defined('MAGIC_QUOTES_STRIPPED')) {
    if (!empty($_GET))    remove_magic_quotes($_GET);
    if (!empty($_POST))   remove_magic_quotes($_POST);
    if (!empty($_COOKIE)) remove_magic_quotes($_COOKIE);
    if (!empty($_REQUEST)) remove_magic_quotes($_REQUEST);
    @ini_set('magic_quotes_gpc', 0);
    define('MAGIC_QUOTES_STRIPPED',1);
}
if (function_exists('set_magic_quotes_runtime')) @set_magic_quotes_runtime(0);
@ini_set('magic_quotes_sybase',0);

// language strings
require_once(DOKU_INC.'inc/lang/en/lang.php');
if(isset($_REQUEST['l']) && !is_array($_REQUEST['l'])) {
    $LC = preg_replace('/[^a-z\-]+/','',$_REQUEST['l']);
}
if(empty($LC)) $LC = 'en';
if($LC && $LC != 'en' ) {
    require_once(DOKU_INC.'inc/lang/'.$LC.'/lang.php');
}

// initialise variables ...
$error = array();

$dokuwiki_hash = array(
    '2005-09-22'   => 'e33223e957b0b0a130d0520db08f8fb7',
    '2006-03-05'   => '51295727f79ab9af309a2fd9e0b61acc',
    '2006-03-09'   => '51295727f79ab9af309a2fd9e0b61acc',
    '2006-11-06'   => 'b3a8af76845977c2000d85d6990dd72b',
    '2007-05-24'   => 'd80f2740c84c4a6a791fd3c7a353536f',
    '2007-06-26'   => 'b3ca19c7a654823144119980be73cd77',
    '2008-05-04'   => '1e5c42eac3219d9e21927c39e3240aad',
    '2009-02-14'   => 'ec8c04210732a14fdfce0f7f6eead865',
    '2009-12-25'   => '993c4b2b385643efe5abf8e7010e11f4',
    '2010-11-07'   => '7921d48195f4db21b8ead6d9bea801b8',
    '2011-05-25'   => '4241865472edb6fa14a1227721008072',
    '2011-11-10'   => 'b46ff19a7587966ac4df61cbab1b8b31',
    '2012-01-25'   => '72c083c73608fc43c586901fd5dabb74',
    '2012-09-10'   => 'eb0b3fc90056fbc12bac6f49f7764df3',
    '2013-05-10'   => '7b62b75245f57f122d3e0f8ed7989623',
    '2013-11-18'   => '263c76af309fbf083867c18a34ff5214',
);


// begin output
header('Content-Type: text/html; charset=utf-8');
?>
>>>>>>> 9269d0b1fb78c217069efd497734c183df9937be
<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# githubog: http://ogp.me/ns/fb/githubog#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>dokuwiki/install.php at master · calltella/dokuwiki</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <link rel="logo" type="image/svg" href="https://github-media-downloads.s3.amazonaws.com/github-logo.svg" />
    <meta property="og:image" content="https://github.global.ssl.fastly.net/images/modules/logos_page/Octocat.png">
    <meta name="hostname" content="github-fe133-cp1-prd.iad.github.net">
    <meta name="ruby" content="ruby 1.9.3p194-tcs-github-tcmalloc (e233cae611) [x86_64-linux]">
    <link rel="assets" href="https://github.global.ssl.fastly.net/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035/">
    <link rel="xhr-socket" href="/_sockets" />
    


    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="72A004D6:1FA5:12D9E745:5267458F" name="octolytics-dimension-request_id" /><meta content="1745131" name="octolytics-actor-id" /><meta content="calltella" name="octolytics-actor-login" /><meta content="8ce4f3f3db82e81919ad5309aa7804888b6b7b239a363806d7d7c8c30ed51595" name="octolytics-actor-hash" />
    

    
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="6dkDpOXGMnRgRFHiU/YgheUrw731wAcCQtAj0oHOG/0=" name="csrf-token" />

    <link href="https://github.global.ssl.fastly.net/assets/github-37b6e181a972ce6706fa61ad91a3f4994af90049.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://github.global.ssl.fastly.net/assets/github2-8159a6c9a2c0054ae5779d7c98fa8d0b5dd25fca.css" media="all" rel="stylesheet" type="text/css" />
    

    

      <script src="https://github.global.ssl.fastly.net/assets/frameworks-8a61e23841d9e5ecc084748ec552e548cd05c977.js" type="text/javascript"></script>
      <script src="https://github.global.ssl.fastly.net/assets/github-9f540012812e5f4c5b7158124e41b8495523ac21.js" type="text/javascript"></script>
      
      <meta http-equiv="x-pjax-version" content="cf6c14028323ce6b99e40379c7d5c6ac">

        <link data-pjax-transient rel='permalink' href='/calltella/dokuwiki/blob/d34a2a38603431bc5caa74b726a6f58d86a70530/install.php'>
  <meta property="og:title" content="dokuwiki"/>
  <meta property="og:type" content="githubog:gitrepository"/>
  <meta property="og:url" content="https://github.com/calltella/dokuwiki"/>
  <meta property="og:image" content="https://github.global.ssl.fastly.net/images/gravatars/gravatar-user-420.png"/>
  <meta property="og:site_name" content="GitHub"/>
  <meta property="og:description" content="dokuwiki - The DokuWiki Open Source Wiki Engine"/>

  <meta name="description" content="dokuwiki - The DokuWiki Open Source Wiki Engine" />

  <meta content="1745131" name="octolytics-dimension-user_id" /><meta content="calltella" name="octolytics-dimension-user_login" /><meta content="13791754" name="octolytics-dimension-repository_id" /><meta content="calltella/dokuwiki" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="true" name="octolytics-dimension-repository_is_fork" /><meta content="456930" name="octolytics-dimension-repository_parent_id" /><meta content="splitbrain/dokuwiki" name="octolytics-dimension-repository_parent_nwo" /><meta content="456930" name="octolytics-dimension-repository_network_root_id" /><meta content="splitbrain/dokuwiki" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/calltella/dokuwiki/commits/master.atom" rel="alternate" title="Recent Commits to dokuwiki:master" type="application/atom+xml" />

  </head>


  <body class="logged_in  env-production windows vis-public fork  page-blob">
    <div class="wrapper">
      
      
      


      <div class="header header-logged-in true">
  <div class="container clearfix">

    <a class="header-logo-invertocat" href="https://github.com/">
  <span class="mega-octicon octicon-mark-github"></span>
</a>

    
    <a href="/notifications" class="notification-indicator tooltipped downwards" data-gotokey="n" title="You have no unread notifications">
        <span class="mail-status all-read"></span>
</a>

      <div class="command-bar js-command-bar  in-repository">
          <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<input type="text" data-hotkey="/ s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    data-username="calltella"
      data-repo="calltella/dokuwiki"
      data-branch="master"
      data-sha="d860b2c9fa5ccb254673d5b9dec597339068736c"
  >

    <input type="hidden" name="nwo" value="calltella/dokuwiki" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="octicon help tooltipped downwards" title="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
        <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
            <li><a href="https://gist.github.com">Gist</a></li>
            <li><a href="/blog">Blog</a></li>
          <li><a href="https://help.github.com">Help</a></li>
        </ul>
      </div>

    


  <ul id="user-links">
    <li>
      <a href="/calltella" class="name">
        <img height="20" src="https://0.gravatar.com/avatar/f9dfc9ed1f48a4db7ca5d081d8b35a86?d=https%3A%2F%2Fidenticons.github.com%2F1f117ae62ab339ec542f12fd9f9d4ba7.png&amp;r=x&amp;s=140" width="20" /> calltella
      </a>
    </li>

      <li>
        <a href="/new" id="new_repo" class="tooltipped downwards" title="Create a new repo" aria-label="Create a new repo">
          <span class="octicon octicon-repo-create"></span>
        </a>
      </li>

      <li>
        <a href="/settings/profile" id="account_settings"
          class="tooltipped downwards"
          aria-label="Account settings "
          title="Account settings ">
          <span class="octicon octicon-tools"></span>
        </a>
      </li>
      <li>
        <a class="tooltipped downwards" href="/logout" data-method="post" id="logout" title="Sign out" aria-label="Sign out">
          <span class="octicon octicon-log-out"></span>
        </a>
      </li>

  </ul>

<div class="js-new-dropdown-contents hidden">
  

<ul class="dropdown-menu">
  <li>
    <a href="/new"><span class="octicon octicon-repo-create"></span> New repository</a>
  </li>
  <li>
    <a href="/organizations/new"><span class="octicon octicon-organization"></span> New organization</a>
  </li>



    <li class="section-title">
      <span title="calltella/dokuwiki">This repository</span>
    </li>
      <li>
        <a href="/calltella/dokuwiki/settings/collaboration"><span class="octicon octicon-person-add"></span> New collaborator</a>
      </li>
</ul>

</div>

<<<<<<< HEAD
=======
/**
 * Print the input form
 */
function print_form($d){
    global $lang;
    global $LC;

    include(DOKU_CONF.'license.php');

    if(!is_array($d)) $d = array();
    $d = array_map('htmlspecialchars',$d);

    if(!isset($d['acl'])) $d['acl']=1;
    if(!isset($d['pop'])) $d['pop']=1;

    ?>
    <form action="" method="post">
    <input type="hidden" name="l" value="<?php echo $LC ?>" />
    <fieldset>
        <label for="title"><?php echo $lang['i_wikiname']?>
        <input type="text" name="d[title]" id="title" value="<?php echo $d['title'] ?>" style="width: 20em;" />
        </label>

        <fieldset style="margin-top: 1em;">
            <label for="acl">
            <input type="checkbox" name="d[acl]" id="acl" <?php echo(($d['acl'] ? ' checked="checked"' : ''));?> />
            <?php echo $lang['i_enableacl']?></label>

            <fieldset id="acldep">
                <label for="superuser"><?php echo $lang['i_superuser']?></label>
                <input class="text" type="text" name="d[superuser]" id="superuser" value="<?php echo $d['superuser'] ?>" />

                <label for="fullname"><?php echo $lang['fullname']?></label>
                <input class="text" type="text" name="d[fullname]" id="fullname" value="<?php echo $d['fullname'] ?>" />

                <label for="email"><?php echo $lang['email']?></label>
                <input class="text" type="text" name="d[email]" id="email" value="<?php echo $d['email'] ?>" />

                <label for="password"><?php echo $lang['pass']?></label>
                <input class="text" type="password" name="d[password]" id="password" />

                <label for="confirm"><?php echo $lang['passchk']?></label>
                <input class="text" type="password" name="d[confirm]" id="confirm" />

                <label for="policy"><?php echo $lang['i_policy']?></label>
                <select class="text" name="d[policy]" id="policy">
                    <option value="0" <?php echo ($d['policy'] == 0)?'selected="selected"':'' ?>><?php echo $lang['i_pol0']?></option>
                    <option value="1" <?php echo ($d['policy'] == 1)?'selected="selected"':'' ?>><?php echo $lang['i_pol1']?></option>
                    <option value="2" <?php echo ($d['policy'] == 2)?'selected="selected"':'' ?>><?php echo $lang['i_pol2']?></option>
                </select>

                <label for="allowreg">
                    <input type="checkbox" name="d[allowreg]" id="allowreg" <?php echo(($d['allowreg'] ? ' checked="checked"' : ''));?> />
                    <?php echo $lang['i_allowreg']?>
                </label>
            </fieldset>
        </fieldset>

        <fieldset>
            <p><?php echo $lang['i_license']?></p>
            <?php
            array_push($license,array('name' => $lang['i_license_none'], 'url'=>''));
            if(empty($d['license'])) $d['license'] = 'cc-by-sa';
            foreach($license as $key => $lic){
                echo '<label for="lic_'.$key.'">';
                echo '<input type="radio" name="d[license]" value="'.htmlspecialchars($key).'" id="lic_'.$key.'"'.
                     (($d['license'] === $key)?' checked="checked"':'').'>';
                echo htmlspecialchars($lic['name']);
                if($lic['url']) echo ' <a href="'.$lic['url'].'" target="_blank"><sup>[?]</sup></a>';
                echo '</label>';
            }
            ?>
        </fieldset>

        <fieldset>
            <p><?php echo $lang['i_pop_field']?></p>
            <label for="pop">
                <input type="checkbox" name="d[pop]" id="pop" <?php echo(($d['pop'] ? ' checked="checked"' : ''));?> />
                <?php echo $lang['i_pop_label']?> <a href="http://www.dokuwiki.org/popularity" target="_blank"><sup>[?]</sup></a>
            </label>
        </fieldset>

    </fieldset>
    <fieldset id="process">
        <input class="button" type="submit" name="submit" value="<?php echo $lang['btn_save']?>" />
    </fieldset>
    </form>
    <?php
}
>>>>>>> 14b3007921f7b66fc9e3621b861a3c83e7e9093c

    
  </div>
</div>

<<<<<<< HEAD
      

      




          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">

    <li class="subscription">
      <form accept-charset="UTF-8" action="/notifications/subscribe" class="js-social-container" data-autosubmit="true" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="6dkDpOXGMnRgRFHiU/YgheUrw731wAcCQtAj0oHOG/0=" /></div>  <input id="repository_id" name="repository_id" type="hidden" value="13791754" />

    <div class="select-menu js-menu-container js-select-menu">
      <a class="social-count js-social-count" href="/calltella/dokuwiki/watchers">
        1
      </a>
      <span class="minibutton select-menu-button with-count js-menu-target" role="button" tabindex="0">
        <span class="js-select-button">
          <span class="octicon octicon-eye-unwatch"></span>
          Unwatch
        </span>
      </span>

      <div class="select-menu-modal-holder">
        <div class="select-menu-modal subscription-menu-modal js-menu-content">
          <div class="select-menu-header">
            <span class="select-menu-title">Notification status</span>
            <span class="octicon octicon-remove-close js-menu-close"></span>
          </div> <!-- /.select-menu-header -->

          <div class="select-menu-list js-navigation-container" role="menu">

            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_included" name="do" type="radio" value="included" />
                <h4>Not watching</h4>
                <span class="description">You only receive notifications for discussions in which you participate or are @mentioned.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye-watch"></span>
                  Watch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item selected" role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input checked="checked" id="do_subscribed" name="do" type="radio" value="subscribed" />
                <h4>Watching</h4>
                <span class="description">You receive notifications for all discussions in this repository.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye-unwatch"></span>
                  Unwatch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_ignore" name="do" type="radio" value="ignore" />
                <h4>Ignoring</h4>
                <span class="description">You do not receive any notifications for discussions in this repository.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-mute"></span>
                  Stop ignoring
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

          </div> <!-- /.select-menu-list -->

        </div> <!-- /.select-menu-modal -->
      </div> <!-- /.select-menu-modal-holder -->
    </div> <!-- /.select-menu -->

</form>
    </li>

  <li>
  
<div class="js-toggler-container js-social-container starring-container ">
  <a href="/calltella/dokuwiki/unstar" class="minibutton with-count js-toggler-target star-button starred upwards" title="Unstar this repo" data-remote="true" data-method="post" rel="nofollow">
    <span class="octicon octicon-star-delete"></span><span class="text">Unstar</span>
  </a>
  <a href="/calltella/dokuwiki/star" class="minibutton with-count js-toggler-target star-button unstarred upwards" title="Star this repo" data-remote="true" data-method="post" rel="nofollow">
    <span class="octicon octicon-star"></span><span class="text">Star</span>
  </a>
  <a class="social-count js-social-count" href="/calltella/dokuwiki/stargazers">0</a>
</div>
=======
/**
 * Check validity of data
 *
 * @author Andreas Gohr
 */
function check_data(&$d){
    static $form_default = array(
        'title'     => '',
        'acl'       => '1',
        'superuser' => '',
        'fullname'  => '',
        'email'     => '',
        'password'  => '',
        'confirm'   => '',
        'policy'    => '0',
        'allowreg'  => '0',
        'license'   => 'cc-by-sa'
    );
    global $lang;
    global $error;

    if(!is_array($d)) $d = array();
    foreach($d as $k => $v) {
        if(is_array($v))
            unset($d[$k]);
        else
            $d[$k] = (string)$v;
    }

    //autolowercase the username
    $d['superuser'] = isset($d['superuser']) ? strtolower($d['superuser']) : "";

    $ok = false;

    if(isset($_REQUEST['submit'])) {
        $ok = true;

        // check input
        if(empty($d['title'])){
            $error[] = sprintf($lang['i_badval'],$lang['i_wikiname']);
            $ok      = false;
        }
        if(isset($d['acl'])){
            if(!preg_match('/^[a-z0-9_]+$/',$d['superuser'])){
                $error[] = sprintf($lang['i_badval'],$lang['i_superuser']);
                $ok      = false;
            }
            if(empty($d['password'])){
                $error[] = sprintf($lang['i_badval'],$lang['pass']);
                $ok      = false;
            }
            elseif(!isset($d['confirm']) || $d['confirm'] != $d['password']){
                $error[] = sprintf($lang['i_badval'],$lang['passchk']);
                $ok      = false;
            }
            if(empty($d['fullname']) || strstr($d['fullname'],':')){
                $error[] = sprintf($lang['i_badval'],$lang['fullname']);
                $ok      = false;
            }
            if(empty($d['email']) || strstr($d['email'],':') || !strstr($d['email'],'@')){
                $error[] = sprintf($lang['i_badval'],$lang['email']);
                $ok      = false;
            }
        }
    }
    $d = array_merge($form_default, $d);
    return $ok;
}
>>>>>>> 14b3007921f7b66fc9e3621b861a3c83e7e9093c

  </li>


        <li>
          <a href="/calltella/dokuwiki/fork" class="minibutton with-count js-toggler-target fork-button lighter upwards" title="Fork this repo" rel="nofollow" data-method="post">
            <span class="octicon octicon-git-branch-create"></span><span class="text">Fork</span>
          </a>
          <a href="/calltella/dokuwiki/network" class="social-count">189</a>
        </li>


</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo-forked"></span>
          <span class="author">
            <a href="/calltella" class="url fn" itemprop="url" rel="author"><span itemprop="title">calltella</span></a>
          </span>
          <span class="repohead-name-divider">/</span>
          <strong><a href="/calltella/dokuwiki" class="js-current-repository js-repo-home-link">dokuwiki</a></strong>

          <span class="page-context-loader">
            <img alt="Octocat-spinner-32" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

            <span class="fork-flag">
              <span class="text">forked from <a href="/splitbrain/dokuwiki">splitbrain/dokuwiki</a></span>
            </span>
        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">

      <div class="repository-with-sidebar repo-container ">

        <div class="repository-sidebar">
            

<div class="sunken-menu vertical-right repo-nav js-repo-nav js-repository-container-pjax js-octicon-loaders">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped leftwards" title="Code">
        <a href="/calltella/dokuwiki" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-gotokey="c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_tags repo_branches /calltella/dokuwiki">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


      <li class="tooltipped leftwards" title="Pull Requests"><a href="/calltella/dokuwiki/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="p" data-selected-links="repo_pulls /calltella/dokuwiki/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>0</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped leftwards" title="Pulse">
        <a href="/calltella/dokuwiki/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /calltella/dokuwiki/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped leftwards" title="Graphs">
        <a href="/calltella/dokuwiki/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /calltella/dokuwiki/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped leftwards" title="Network">
        <a href="/calltella/dokuwiki/network" aria-label="Network" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-selected-links="repo_network /calltella/dokuwiki/network">
          <span class="octicon octicon-git-branch"></span> <span class="full-word">Network</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


      <div class="sunken-menu-separator"></div>
      <ul class="sunken-menu-group">
        <li class="tooltipped leftwards" title="Settings">
          <a href="/calltella/dokuwiki/settings"
            class="sunken-menu-item" data-pjax aria-label="Settings">
            <span class="octicon octicon-tools"></span> <span class="full-word">Settings</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
          </a>
        </li>
      </ul>
  </div>
</div>

<<<<<<< HEAD
            <div class="only-with-full-nav">
              
=======
EOT;
    $output .= '$conf[\'title\'] = \''.addslashes($d['title'])."';\n";
    $output .= '$conf[\'lang\'] = \''.addslashes($LC)."';\n";
    $output .= '$conf[\'license\'] = \''.addslashes($d['license'])."';\n";
    if($d['acl']){
        $output .= '$conf[\'useacl\'] = 1'.";\n";
        $output .= "\$conf['superuser'] = '@admin';\n";
    }
    if(!$d['allowreg']){
        $output .= '$conf[\'disableactions\'] = \'register\''.";\n";
    }
    $ok = $ok && fileWrite(DOKU_LOCAL.'local.php',$output);

    if ($d['acl']) {
        // hash the password
        $phash = new PassHash();
        $pass = $phash->hash_smd5($d['password']);

        // create users.auth.php
        // --- user:SMD5password:Real Name:email:groups,comma,seperated
        $output = join(":",array($d['superuser'], $pass, $d['fullname'], $d['email'], 'admin,user'));
        $output = @file_get_contents(DOKU_CONF.'users.auth.php.dist')."\n$output\n";
        $ok = $ok && fileWrite(DOKU_LOCAL.'users.auth.php', $output);

        // create acl.auth.php
        $output = <<<EOT
# acl.auth.php
# <?php exit()?>
# Don't modify the lines above
#
# Access Control Lists
#
# Auto-generated by install script
# Date: $now

EOT;
        if($d['policy'] == 2){
            $output .=  "*               @ALL          0\n";
            $output .=  "*               @user         8\n";
        }elseif($d['policy'] == 1){
            $output .=  "*               @ALL          1\n";
            $output .=  "*               @user         8\n";
        }else{
            $output .=  "*               @ALL          8\n";
        }
        $ok = $ok && fileWrite(DOKU_LOCAL.'acl.auth.php', $output);
    }

    // enable popularity submission
    if($d['pop']){
        @touch(DOKU_INC.'data/cache/autosubmit.txt');
    }

    // disable auth plugins til needed
    $output = <<<EOT
<?php
/*
 * Local plugin enable/disable settings
 *
 * Auto-generated by install script
 * Date: $now
 */
>>>>>>> 14b3007921f7b66fc9e3621b861a3c83e7e9093c

  

<div class="clone-url "
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=push">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/calltella/dokuwiki.git" readonly="readonly">

    <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/calltella/dokuwiki.git" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>

  

<div class="clone-url open"
  data-protocol-type="ssh"
  data-url="/users/set_protocol?protocol_selector=ssh&amp;protocol_type=push">
  <h3><strong>SSH</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="git@github.com:calltella/dokuwiki.git" readonly="readonly">

    <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="git@github.com:calltella/dokuwiki.git" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=push">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/calltella/dokuwiki" readonly="readonly">

    <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/calltella/dokuwiki" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>,
      <a href="#" class="js-clone-selector" data-protocol="ssh">SSH</a>,
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <span class="octicon help tooltipped upwards" title="Get help on which URL is right for you.">
    <a href="https://help.github.com/articles/which-remote-url-should-i-use">
    <span class="octicon octicon-question"></span>
    </a>
  </span>
</p>


  <a href="http://windows.github.com" class="minibutton sidebar-button">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>

              <a href="/calltella/dokuwiki/archive/master.zip"
                 class="minibutton sidebar-button"
                 title="Download this repository as a zip file"
                 rel="nofollow">
                <span class="octicon octicon-cloud-download"></span>
                Download ZIP
              </a>
            </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:61d6c599c13502af1e5bd05b5e239f39 -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/calltella/dokuwiki/find/master" data-pjax data-hotkey="t" class="js-show-file-finder" style="display:none">Show File Finder</a>

<div class="file-navigation">
  
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    role="button" aria-label="Switch branches or tags" tabindex="0">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax>

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-remove-close js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Find or create a branch…" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Find or create a branch…">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/blob/3waymerge/install.php"
                 data-name="3waymerge"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="3waymerge">3waymerge</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/blob/FS%232867/install.php"
                 data-name="FS#2867"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="FS#2867">FS#2867</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/blob/diff_navigation/install.php"
                 data-name="diff_navigation"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="diff_navigation">diff_navigation</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/blob/eventrenderer/install.php"
                 data-name="eventrenderer"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="eventrenderer">eventrenderer</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/blob/extension_manager/install.php"
                 data-name="extension_manager"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="extension_manager">extension_manager</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/blob/fetchissues2/install.php"
                 data-name="fetchissues2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="fetchissues2">fetchissues2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/blob/fixsklocalization/install.php"
                 data-name="fixsklocalization"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="fixsklocalization">fixsklocalization</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/blob/fs2851/install.php"
                 data-name="fs2851"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="fs2851">fs2851</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/blob/hotfix/install.php"
                 data-name="hotfix"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="hotfix">hotfix</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/blob/mail/install.php"
                 data-name="mail"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="mail">mail</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/blob/master/install.php"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/blob/old-stable/install.php"
                 data-name="old-stable"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="old-stable">old-stable</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/blob/stable/install.php"
                 data-name="stable"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="stable">stable</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/blob/tablethead/install.php"
                 data-name="tablethead"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="tablethead">tablethead</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/blob/tablethead_chris/install.php"
                 data-name="tablethead_chris"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="tablethead_chris">tablethead_chris</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/blob/usespacesinlinktitle/install.php"
                 data-name="usespacesinlinktitle"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="usespacesinlinktitle">usespacesinlinktitle</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/blob/video-audio/install.php"
                 data-name="video-audio"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="video-audio">video-audio</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/blob/visibilityPHPDocs/install.php"
                 data-name="visibilityPHPDocs"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="visibilityPHPDocs">visibilityPHPDocs</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <form accept-charset="UTF-8" action="/calltella/dokuwiki/branches" class="js-create-branch select-menu-item select-menu-new-item-form js-navigation-item js-new-item-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="6dkDpOXGMnRgRFHiU/YgheUrw731wAcCQtAj0oHOG/0=" /></div>
            <span class="octicon octicon-git-branch-create select-menu-item-icon"></span>
            <div class="select-menu-item-text">
              <h4>Create branch: <span class="js-new-item-name"></span></h4>
              <span class="description">from ‘master’</span>
            </div>
            <input type="hidden" name="name" id="name" class="js-new-item-value">
            <input type="hidden" name="branch" id="branch" value="master" />
            <input type="hidden" name="path" id="branch" value="install.php" />
          </form> <!-- /.select-menu-item -->

      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_stable_2013-05-10a/install.php"
                 data-name="release_stable_2013-05-10a"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_stable_2013-05-10a">release_stable_2013-05-10a</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_stable_2013-05-10/install.php"
                 data-name="release_stable_2013-05-10"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_stable_2013-05-10">release_stable_2013-05-10</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_stable_2012-10-13/install.php"
                 data-name="release_stable_2012-10-13"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_stable_2012-10-13">release_stable_2012-10-13</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_stable_2012-01-25b/install.php"
                 data-name="release_stable_2012-01-25b"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_stable_2012-01-25b">release_stable_2012-01-25b</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_stable_2012-01-25/install.php"
                 data-name="release_stable_2012-01-25"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_stable_2012-01-25">release_stable_2012-01-25</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_stable_2011_05_25a/install.php"
                 data-name="release_stable_2011_05_25a"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_stable_2011_05_25a">release_stable_2011_05_25a</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_stable_2011_05_25/install.php"
                 data-name="release_stable_2011_05_25"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_stable_2011_05_25">release_stable_2011_05_25</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_stable_2010-11-07b/install.php"
                 data-name="release_stable_2010-11-07b"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_stable_2010-11-07b">release_stable_2010-11-07b</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_stable_2010-11-07a/install.php"
                 data-name="release_stable_2010-11-07a"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_stable_2010-11-07a">release_stable_2010-11-07a</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_stable_2010-11-07/install.php"
                 data-name="release_stable_2010-11-07"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_stable_2010-11-07">release_stable_2010-11-07</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_stable_2009-12-25/install.php"
                 data-name="release_stable_2009-12-25"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_stable_2009-12-25">release_stable_2009-12-25</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_stable_2009-02-14/install.php"
                 data-name="release_stable_2009-02-14"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_stable_2009-02-14">release_stable_2009-02-14</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_stable_2008-05-05/install.php"
                 data-name="release_stable_2008-05-05"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_stable_2008-05-05">release_stable_2008-05-05</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_stable_2008-05-04/install.php"
                 data-name="release_stable_2008-05-04"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_stable_2008-05-04">release_stable_2008-05-04</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_candidate_2013_03_06/install.php"
                 data-name="release_candidate_2013_03_06"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_candidate_2013_03_06">release_candidate_2013_03_06</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_candidate_2012_09_10/install.php"
                 data-name="release_candidate_2012_09_10"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_candidate_2012_09_10">release_candidate_2012_09_10</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_candidate_2011-11-10/install.php"
                 data-name="release_candidate_2011-11-10"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_candidate_2011-11-10">release_candidate_2011-11-10</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_candidate_2010-10-27/install.php"
                 data-name="release_candidate_2010-10-27"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_candidate_2010-10-27">release_candidate_2010-10-27</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_candidate_2010-10-07/install.php"
                 data-name="release_candidate_2010-10-07"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_candidate_2010-10-07">release_candidate_2010-10-07</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_candidate_2009-12-02/install.php"
                 data-name="release_candidate_2009-12-02"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_candidate_2009-12-02">release_candidate_2009-12-02</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_candidate_2009-02-06/install.php"
                 data-name="release_candidate_2009-02-06"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_candidate_2009-02-06">release_candidate_2009-02-06</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_candidate_2009-01-30/install.php"
                 data-name="release_candidate_2009-01-30"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_candidate_2009-01-30">release_candidate_2009-01-30</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_candidate_2009-01-26/install.php"
                 data-name="release_candidate_2009-01-26"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_candidate_2009-01-26">release_candidate_2009-01-26</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_candidate_2008-04-11/install.php"
                 data-name="release_candidate_2008-04-11"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_candidate_2008-04-11">release_candidate_2008-04-11</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_candidate_2008-03-31/install.php"
                 data-name="release_candidate_2008-03-31"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_candidate_2008-03-31">release_candidate_2008-03-31</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_candidate_2007-05-24/install.php"
                 data-name="release_candidate_2007-05-24"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_candidate_2007-05-24">release_candidate_2007-05-24</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_candidate_2006-10-19/install.php"
                 data-name="release_candidate_2006-10-19"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_candidate_2006-10-19">release_candidate_2006-10-19</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_candidate_2006-10-08/install.php"
                 data-name="release_candidate_2006-10-08"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_candidate_2006-10-08">release_candidate_2006-10-08</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_candidate_2006-09-28/install.php"
                 data-name="release_candidate_2006-09-28"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_candidate_2006-09-28">release_candidate_2006-09-28</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_2007-06-26/install.php"
                 data-name="release_2007-06-26"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_2007-06-26">release_2007-06-26</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_2006-11-06/install.php"
                 data-name="release_2006-11-06"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_2006-11-06">release_2006-11-06</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_2006-03-09/install.php"
                 data-name="release_2006-03-09"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_2006-03-09">release_2006-03-09</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/release_2006-03-05/install.php"
                 data-name="release_2006-03-05"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release_2006-03-05">release_2006-03-05</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/rel_2005-09-22/install.php"
                 data-name="rel_2005-09-22"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="rel_2005-09-22">rel_2005-09-22</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/rel_2005-09-19/install.php"
                 data-name="rel_2005-09-19"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="rel_2005-09-19">rel_2005-09-19</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/rel_2005-07-13/install.php"
                 data-name="rel_2005-07-13"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="rel_2005-07-13">rel_2005-07-13</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/rel_2005-07-01/install.php"
                 data-name="rel_2005-07-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="rel_2005-07-01">rel_2005-07-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2009-12-01/install.php"
                 data-name="develsnap_2009-12-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2009-12-01">develsnap_2009-12-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2009-11-15/install.php"
                 data-name="develsnap_2009-11-15"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2009-11-15">develsnap_2009-11-15</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2009-11-01/install.php"
                 data-name="develsnap_2009-11-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2009-11-01">develsnap_2009-11-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2009-10-01/install.php"
                 data-name="develsnap_2009-10-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2009-10-01">develsnap_2009-10-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2009-09-01/install.php"
                 data-name="develsnap_2009-09-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2009-09-01">develsnap_2009-09-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2009-08-01/install.php"
                 data-name="develsnap_2009-08-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2009-08-01">develsnap_2009-08-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2009-07-01/install.php"
                 data-name="develsnap_2009-07-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2009-07-01">develsnap_2009-07-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2009-06-01/install.php"
                 data-name="develsnap_2009-06-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2009-06-01">develsnap_2009-06-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2009-05-01/install.php"
                 data-name="develsnap_2009-05-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2009-05-01">develsnap_2009-05-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2009-04-01/install.php"
                 data-name="develsnap_2009-04-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2009-04-01">develsnap_2009-04-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2009-03-01/install.php"
                 data-name="develsnap_2009-03-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2009-03-01">develsnap_2009-03-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2009-02-01/install.php"
                 data-name="develsnap_2009-02-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2009-02-01">develsnap_2009-02-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2009-01-01/install.php"
                 data-name="develsnap_2009-01-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2009-01-01">develsnap_2009-01-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2008-12-01/install.php"
                 data-name="develsnap_2008-12-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2008-12-01">develsnap_2008-12-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2008-11-01/install.php"
                 data-name="develsnap_2008-11-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2008-11-01">develsnap_2008-11-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2008-10-13/install.php"
                 data-name="develsnap_2008-10-13"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2008-10-13">develsnap_2008-10-13</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2008-10-01/install.php"
                 data-name="develsnap_2008-10-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2008-10-01">develsnap_2008-10-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2008-09-01/install.php"
                 data-name="develsnap_2008-09-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2008-09-01">develsnap_2008-09-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2008-08-01/install.php"
                 data-name="develsnap_2008-08-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2008-08-01">develsnap_2008-08-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2008-07-01/install.php"
                 data-name="develsnap_2008-07-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2008-07-01">develsnap_2008-07-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2008-06-01/install.php"
                 data-name="develsnap_2008-06-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2008-06-01">develsnap_2008-06-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2008-05-01/install.php"
                 data-name="develsnap_2008-05-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2008-05-01">develsnap_2008-05-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2008-04-01/install.php"
                 data-name="develsnap_2008-04-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2008-04-01">develsnap_2008-04-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2008-03-01/install.php"
                 data-name="develsnap_2008-03-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2008-03-01">develsnap_2008-03-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2008-02-01/install.php"
                 data-name="develsnap_2008-02-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2008-02-01">develsnap_2008-02-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2008-01-01/install.php"
                 data-name="develsnap_2008-01-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2008-01-01">develsnap_2008-01-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2007-12-01/install.php"
                 data-name="develsnap_2007-12-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2007-12-01">develsnap_2007-12-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2007-11-01/install.php"
                 data-name="develsnap_2007-11-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2007-11-01">develsnap_2007-11-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2007-10-01/install.php"
                 data-name="develsnap_2007-10-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2007-10-01">develsnap_2007-10-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2007-09-01/install.php"
                 data-name="develsnap_2007-09-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2007-09-01">develsnap_2007-09-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2007-08-01/install.php"
                 data-name="develsnap_2007-08-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2007-08-01">develsnap_2007-08-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2007-07-01/install.php"
                 data-name="develsnap_2007-07-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2007-07-01">develsnap_2007-07-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2007-06-01/install.php"
                 data-name="develsnap_2007-06-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2007-06-01">develsnap_2007-06-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2007-05-01/install.php"
                 data-name="develsnap_2007-05-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2007-05-01">develsnap_2007-05-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2007-04-01/install.php"
                 data-name="develsnap_2007-04-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2007-04-01">develsnap_2007-04-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2007-03-01/install.php"
                 data-name="develsnap_2007-03-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2007-03-01">develsnap_2007-03-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2007-02-01/install.php"
                 data-name="develsnap_2007-02-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2007-02-01">develsnap_2007-02-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2007-01-01/install.php"
                 data-name="develsnap_2007-01-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2007-01-01">develsnap_2007-01-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2006-12-01/install.php"
                 data-name="develsnap_2006-12-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2006-12-01">develsnap_2006-12-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2006-11-01/install.php"
                 data-name="develsnap_2006-11-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2006-11-01">develsnap_2006-11-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2006-10-01/install.php"
                 data-name="develsnap_2006-10-01"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2006-10-01">develsnap_2006-10-01</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2006-09-13/install.php"
                 data-name="develsnap_2006-09-13"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2006-09-13">develsnap_2006-09-13</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2006-05-07/install.php"
                 data-name="develsnap_2006-05-07"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2006-05-07">develsnap_2006-05-07</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/calltella/dokuwiki/tree/develsnap_2005-05-31/install.php"
                 data-name="develsnap_2005-05-31"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develsnap_2005-05-31">develsnap_2005-05-31</a>
            </div> <!-- /.select-menu-item -->
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/calltella/dokuwiki" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">dokuwiki</span></a></span></span><span class="separator"> / </span><strong class="final-path">install.php</strong> <span class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="install.php" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


  <div class="commit commit-loader file-history-tease js-deferred-content" data-url="/calltella/dokuwiki/contributors/master/install.php">
    Fetching contributors…

    <div class="participation">
      <p class="loader-loading"><img alt="Octocat-spinner-32-eaf2f5" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32-EAF2F5.gif" width="16" /></p>
      <p class="loader-error">Cannot retrieve contributors at this time</p>
    </div>
  </div>

<div id="files" class="bubble">
  <div class="file">
    <div class="meta">
      <div class="info">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
          <span>614 lines (540 sloc)</span>
        <span>19.666 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
            <a class="minibutton tooltipped leftwards"
               href="http://windows.github.com" title="Open this file in GitHub for Windows">
                <span class="octicon octicon-device-desktop"></span> Open
            </a>
                <a class="minibutton"
                   href="/calltella/dokuwiki/edit/master/install.php"
                   data-method="post" rel="nofollow" data-hotkey="e">Edit</a>
          <a href="/calltella/dokuwiki/raw/master/install.php" class="button minibutton " id="raw-url">Raw</a>
            <a href="/calltella/dokuwiki/blame/master/install.php" class="button minibutton ">Blame</a>
          <a href="/calltella/dokuwiki/commits/master/install.php" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->
          <a class="minibutton danger empty-icon tooltipped downwards"
             href="/calltella/dokuwiki/delete/master/install.php"
             title=""
             data-method="post" data-test-id="delete-blob-file" rel="nofollow">
          Delete
        </a>
      </div><!-- /.actions -->

    </div>
        <div class="blob-wrapper data type-php js-blob-data">
        <table class="file-code file-diff">
          <tr class="file-code-line">
            <td class="blob-line-nums">
              <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>
<span id="L161" rel="#L161">161</span>
<span id="L162" rel="#L162">162</span>
<span id="L163" rel="#L163">163</span>
<span id="L164" rel="#L164">164</span>
<span id="L165" rel="#L165">165</span>
<span id="L166" rel="#L166">166</span>
<span id="L167" rel="#L167">167</span>
<span id="L168" rel="#L168">168</span>
<span id="L169" rel="#L169">169</span>
<span id="L170" rel="#L170">170</span>
<span id="L171" rel="#L171">171</span>
<span id="L172" rel="#L172">172</span>
<span id="L173" rel="#L173">173</span>
<span id="L174" rel="#L174">174</span>
<span id="L175" rel="#L175">175</span>
<span id="L176" rel="#L176">176</span>
<span id="L177" rel="#L177">177</span>
<span id="L178" rel="#L178">178</span>
<span id="L179" rel="#L179">179</span>
<span id="L180" rel="#L180">180</span>
<span id="L181" rel="#L181">181</span>
<span id="L182" rel="#L182">182</span>
<span id="L183" rel="#L183">183</span>
<span id="L184" rel="#L184">184</span>
<span id="L185" rel="#L185">185</span>
<span id="L186" rel="#L186">186</span>
<span id="L187" rel="#L187">187</span>
<span id="L188" rel="#L188">188</span>
<span id="L189" rel="#L189">189</span>
<span id="L190" rel="#L190">190</span>
<span id="L191" rel="#L191">191</span>
<span id="L192" rel="#L192">192</span>
<span id="L193" rel="#L193">193</span>
<span id="L194" rel="#L194">194</span>
<span id="L195" rel="#L195">195</span>
<span id="L196" rel="#L196">196</span>
<span id="L197" rel="#L197">197</span>
<span id="L198" rel="#L198">198</span>
<span id="L199" rel="#L199">199</span>
<span id="L200" rel="#L200">200</span>
<span id="L201" rel="#L201">201</span>
<span id="L202" rel="#L202">202</span>
<span id="L203" rel="#L203">203</span>
<span id="L204" rel="#L204">204</span>
<span id="L205" rel="#L205">205</span>
<span id="L206" rel="#L206">206</span>
<span id="L207" rel="#L207">207</span>
<span id="L208" rel="#L208">208</span>
<span id="L209" rel="#L209">209</span>
<span id="L210" rel="#L210">210</span>
<span id="L211" rel="#L211">211</span>
<span id="L212" rel="#L212">212</span>
<span id="L213" rel="#L213">213</span>
<span id="L214" rel="#L214">214</span>
<span id="L215" rel="#L215">215</span>
<span id="L216" rel="#L216">216</span>
<span id="L217" rel="#L217">217</span>
<span id="L218" rel="#L218">218</span>
<span id="L219" rel="#L219">219</span>
<span id="L220" rel="#L220">220</span>
<span id="L221" rel="#L221">221</span>
<span id="L222" rel="#L222">222</span>
<span id="L223" rel="#L223">223</span>
<span id="L224" rel="#L224">224</span>
<span id="L225" rel="#L225">225</span>
<span id="L226" rel="#L226">226</span>
<span id="L227" rel="#L227">227</span>
<span id="L228" rel="#L228">228</span>
<span id="L229" rel="#L229">229</span>
<span id="L230" rel="#L230">230</span>
<span id="L231" rel="#L231">231</span>
<span id="L232" rel="#L232">232</span>
<span id="L233" rel="#L233">233</span>
<span id="L234" rel="#L234">234</span>
<span id="L235" rel="#L235">235</span>
<span id="L236" rel="#L236">236</span>
<span id="L237" rel="#L237">237</span>
<span id="L238" rel="#L238">238</span>
<span id="L239" rel="#L239">239</span>
<span id="L240" rel="#L240">240</span>
<span id="L241" rel="#L241">241</span>
<span id="L242" rel="#L242">242</span>
<span id="L243" rel="#L243">243</span>
<span id="L244" rel="#L244">244</span>
<span id="L245" rel="#L245">245</span>
<span id="L246" rel="#L246">246</span>
<span id="L247" rel="#L247">247</span>
<span id="L248" rel="#L248">248</span>
<span id="L249" rel="#L249">249</span>
<span id="L250" rel="#L250">250</span>
<span id="L251" rel="#L251">251</span>
<span id="L252" rel="#L252">252</span>
<span id="L253" rel="#L253">253</span>
<span id="L254" rel="#L254">254</span>
<span id="L255" rel="#L255">255</span>
<span id="L256" rel="#L256">256</span>
<span id="L257" rel="#L257">257</span>
<span id="L258" rel="#L258">258</span>
<span id="L259" rel="#L259">259</span>
<span id="L260" rel="#L260">260</span>
<span id="L261" rel="#L261">261</span>
<span id="L262" rel="#L262">262</span>
<span id="L263" rel="#L263">263</span>
<span id="L264" rel="#L264">264</span>
<span id="L265" rel="#L265">265</span>
<span id="L266" rel="#L266">266</span>
<span id="L267" rel="#L267">267</span>
<span id="L268" rel="#L268">268</span>
<span id="L269" rel="#L269">269</span>
<span id="L270" rel="#L270">270</span>
<span id="L271" rel="#L271">271</span>
<span id="L272" rel="#L272">272</span>
<span id="L273" rel="#L273">273</span>
<span id="L274" rel="#L274">274</span>
<span id="L275" rel="#L275">275</span>
<span id="L276" rel="#L276">276</span>
<span id="L277" rel="#L277">277</span>
<span id="L278" rel="#L278">278</span>
<span id="L279" rel="#L279">279</span>
<span id="L280" rel="#L280">280</span>
<span id="L281" rel="#L281">281</span>
<span id="L282" rel="#L282">282</span>
<span id="L283" rel="#L283">283</span>
<span id="L284" rel="#L284">284</span>
<span id="L285" rel="#L285">285</span>
<span id="L286" rel="#L286">286</span>
<span id="L287" rel="#L287">287</span>
<span id="L288" rel="#L288">288</span>
<span id="L289" rel="#L289">289</span>
<span id="L290" rel="#L290">290</span>
<span id="L291" rel="#L291">291</span>
<span id="L292" rel="#L292">292</span>
<span id="L293" rel="#L293">293</span>
<span id="L294" rel="#L294">294</span>
<span id="L295" rel="#L295">295</span>
<span id="L296" rel="#L296">296</span>
<span id="L297" rel="#L297">297</span>
<span id="L298" rel="#L298">298</span>
<span id="L299" rel="#L299">299</span>
<span id="L300" rel="#L300">300</span>
<span id="L301" rel="#L301">301</span>
<span id="L302" rel="#L302">302</span>
<span id="L303" rel="#L303">303</span>
<span id="L304" rel="#L304">304</span>
<span id="L305" rel="#L305">305</span>
<span id="L306" rel="#L306">306</span>
<span id="L307" rel="#L307">307</span>
<span id="L308" rel="#L308">308</span>
<span id="L309" rel="#L309">309</span>
<span id="L310" rel="#L310">310</span>
<span id="L311" rel="#L311">311</span>
<span id="L312" rel="#L312">312</span>
<span id="L313" rel="#L313">313</span>
<span id="L314" rel="#L314">314</span>
<span id="L315" rel="#L315">315</span>
<span id="L316" rel="#L316">316</span>
<span id="L317" rel="#L317">317</span>
<span id="L318" rel="#L318">318</span>
<span id="L319" rel="#L319">319</span>
<span id="L320" rel="#L320">320</span>
<span id="L321" rel="#L321">321</span>
<span id="L322" rel="#L322">322</span>
<span id="L323" rel="#L323">323</span>
<span id="L324" rel="#L324">324</span>
<span id="L325" rel="#L325">325</span>
<span id="L326" rel="#L326">326</span>
<span id="L327" rel="#L327">327</span>
<span id="L328" rel="#L328">328</span>
<span id="L329" rel="#L329">329</span>
<span id="L330" rel="#L330">330</span>
<span id="L331" rel="#L331">331</span>
<span id="L332" rel="#L332">332</span>
<span id="L333" rel="#L333">333</span>
<span id="L334" rel="#L334">334</span>
<span id="L335" rel="#L335">335</span>
<span id="L336" rel="#L336">336</span>
<span id="L337" rel="#L337">337</span>
<span id="L338" rel="#L338">338</span>
<span id="L339" rel="#L339">339</span>
<span id="L340" rel="#L340">340</span>
<span id="L341" rel="#L341">341</span>
<span id="L342" rel="#L342">342</span>
<span id="L343" rel="#L343">343</span>
<span id="L344" rel="#L344">344</span>
<span id="L345" rel="#L345">345</span>
<span id="L346" rel="#L346">346</span>
<span id="L347" rel="#L347">347</span>
<span id="L348" rel="#L348">348</span>
<span id="L349" rel="#L349">349</span>
<span id="L350" rel="#L350">350</span>
<span id="L351" rel="#L351">351</span>
<span id="L352" rel="#L352">352</span>
<span id="L353" rel="#L353">353</span>
<span id="L354" rel="#L354">354</span>
<span id="L355" rel="#L355">355</span>
<span id="L356" rel="#L356">356</span>
<span id="L357" rel="#L357">357</span>
<span id="L358" rel="#L358">358</span>
<span id="L359" rel="#L359">359</span>
<span id="L360" rel="#L360">360</span>
<span id="L361" rel="#L361">361</span>
<span id="L362" rel="#L362">362</span>
<span id="L363" rel="#L363">363</span>
<span id="L364" rel="#L364">364</span>
<span id="L365" rel="#L365">365</span>
<span id="L366" rel="#L366">366</span>
<span id="L367" rel="#L367">367</span>
<span id="L368" rel="#L368">368</span>
<span id="L369" rel="#L369">369</span>
<span id="L370" rel="#L370">370</span>
<span id="L371" rel="#L371">371</span>
<span id="L372" rel="#L372">372</span>
<span id="L373" rel="#L373">373</span>
<span id="L374" rel="#L374">374</span>
<span id="L375" rel="#L375">375</span>
<span id="L376" rel="#L376">376</span>
<span id="L377" rel="#L377">377</span>
<span id="L378" rel="#L378">378</span>
<span id="L379" rel="#L379">379</span>
<span id="L380" rel="#L380">380</span>
<span id="L381" rel="#L381">381</span>
<span id="L382" rel="#L382">382</span>
<span id="L383" rel="#L383">383</span>
<span id="L384" rel="#L384">384</span>
<span id="L385" rel="#L385">385</span>
<span id="L386" rel="#L386">386</span>
<span id="L387" rel="#L387">387</span>
<span id="L388" rel="#L388">388</span>
<span id="L389" rel="#L389">389</span>
<span id="L390" rel="#L390">390</span>
<span id="L391" rel="#L391">391</span>
<span id="L392" rel="#L392">392</span>
<span id="L393" rel="#L393">393</span>
<span id="L394" rel="#L394">394</span>
<span id="L395" rel="#L395">395</span>
<span id="L396" rel="#L396">396</span>
<span id="L397" rel="#L397">397</span>
<span id="L398" rel="#L398">398</span>
<span id="L399" rel="#L399">399</span>
<span id="L400" rel="#L400">400</span>
<span id="L401" rel="#L401">401</span>
<span id="L402" rel="#L402">402</span>
<span id="L403" rel="#L403">403</span>
<span id="L404" rel="#L404">404</span>
<span id="L405" rel="#L405">405</span>
<span id="L406" rel="#L406">406</span>
<span id="L407" rel="#L407">407</span>
<span id="L408" rel="#L408">408</span>
<span id="L409" rel="#L409">409</span>
<span id="L410" rel="#L410">410</span>
<span id="L411" rel="#L411">411</span>
<span id="L412" rel="#L412">412</span>
<span id="L413" rel="#L413">413</span>
<span id="L414" rel="#L414">414</span>
<span id="L415" rel="#L415">415</span>
<span id="L416" rel="#L416">416</span>
<span id="L417" rel="#L417">417</span>
<span id="L418" rel="#L418">418</span>
<span id="L419" rel="#L419">419</span>
<span id="L420" rel="#L420">420</span>
<span id="L421" rel="#L421">421</span>
<span id="L422" rel="#L422">422</span>
<span id="L423" rel="#L423">423</span>
<span id="L424" rel="#L424">424</span>
<span id="L425" rel="#L425">425</span>
<span id="L426" rel="#L426">426</span>
<span id="L427" rel="#L427">427</span>
<span id="L428" rel="#L428">428</span>
<span id="L429" rel="#L429">429</span>
<span id="L430" rel="#L430">430</span>
<span id="L431" rel="#L431">431</span>
<span id="L432" rel="#L432">432</span>
<span id="L433" rel="#L433">433</span>
<span id="L434" rel="#L434">434</span>
<span id="L435" rel="#L435">435</span>
<span id="L436" rel="#L436">436</span>
<span id="L437" rel="#L437">437</span>
<span id="L438" rel="#L438">438</span>
<span id="L439" rel="#L439">439</span>
<span id="L440" rel="#L440">440</span>
<span id="L441" rel="#L441">441</span>
<span id="L442" rel="#L442">442</span>
<span id="L443" rel="#L443">443</span>
<span id="L444" rel="#L444">444</span>
<span id="L445" rel="#L445">445</span>
<span id="L446" rel="#L446">446</span>
<span id="L447" rel="#L447">447</span>
<span id="L448" rel="#L448">448</span>
<span id="L449" rel="#L449">449</span>
<span id="L450" rel="#L450">450</span>
<span id="L451" rel="#L451">451</span>
<span id="L452" rel="#L452">452</span>
<span id="L453" rel="#L453">453</span>
<span id="L454" rel="#L454">454</span>
<span id="L455" rel="#L455">455</span>
<span id="L456" rel="#L456">456</span>
<span id="L457" rel="#L457">457</span>
<span id="L458" rel="#L458">458</span>
<span id="L459" rel="#L459">459</span>
<span id="L460" rel="#L460">460</span>
<span id="L461" rel="#L461">461</span>
<span id="L462" rel="#L462">462</span>
<span id="L463" rel="#L463">463</span>
<span id="L464" rel="#L464">464</span>
<span id="L465" rel="#L465">465</span>
<span id="L466" rel="#L466">466</span>
<span id="L467" rel="#L467">467</span>
<span id="L468" rel="#L468">468</span>
<span id="L469" rel="#L469">469</span>
<span id="L470" rel="#L470">470</span>
<span id="L471" rel="#L471">471</span>
<span id="L472" rel="#L472">472</span>
<span id="L473" rel="#L473">473</span>
<span id="L474" rel="#L474">474</span>
<span id="L475" rel="#L475">475</span>
<span id="L476" rel="#L476">476</span>
<span id="L477" rel="#L477">477</span>
<span id="L478" rel="#L478">478</span>
<span id="L479" rel="#L479">479</span>
<span id="L480" rel="#L480">480</span>
<span id="L481" rel="#L481">481</span>
<span id="L482" rel="#L482">482</span>
<span id="L483" rel="#L483">483</span>
<span id="L484" rel="#L484">484</span>
<span id="L485" rel="#L485">485</span>
<span id="L486" rel="#L486">486</span>
<span id="L487" rel="#L487">487</span>
<span id="L488" rel="#L488">488</span>
<span id="L489" rel="#L489">489</span>
<span id="L490" rel="#L490">490</span>
<span id="L491" rel="#L491">491</span>
<span id="L492" rel="#L492">492</span>
<span id="L493" rel="#L493">493</span>
<span id="L494" rel="#L494">494</span>
<span id="L495" rel="#L495">495</span>
<span id="L496" rel="#L496">496</span>
<span id="L497" rel="#L497">497</span>
<span id="L498" rel="#L498">498</span>
<span id="L499" rel="#L499">499</span>
<span id="L500" rel="#L500">500</span>
<span id="L501" rel="#L501">501</span>
<span id="L502" rel="#L502">502</span>
<span id="L503" rel="#L503">503</span>
<span id="L504" rel="#L504">504</span>
<span id="L505" rel="#L505">505</span>
<span id="L506" rel="#L506">506</span>
<span id="L507" rel="#L507">507</span>
<span id="L508" rel="#L508">508</span>
<span id="L509" rel="#L509">509</span>
<span id="L510" rel="#L510">510</span>
<span id="L511" rel="#L511">511</span>
<span id="L512" rel="#L512">512</span>
<span id="L513" rel="#L513">513</span>
<span id="L514" rel="#L514">514</span>
<span id="L515" rel="#L515">515</span>
<span id="L516" rel="#L516">516</span>
<span id="L517" rel="#L517">517</span>
<span id="L518" rel="#L518">518</span>
<span id="L519" rel="#L519">519</span>
<span id="L520" rel="#L520">520</span>
<span id="L521" rel="#L521">521</span>
<span id="L522" rel="#L522">522</span>
<span id="L523" rel="#L523">523</span>
<span id="L524" rel="#L524">524</span>
<span id="L525" rel="#L525">525</span>
<span id="L526" rel="#L526">526</span>
<span id="L527" rel="#L527">527</span>
<span id="L528" rel="#L528">528</span>
<span id="L529" rel="#L529">529</span>
<span id="L530" rel="#L530">530</span>
<span id="L531" rel="#L531">531</span>
<span id="L532" rel="#L532">532</span>
<span id="L533" rel="#L533">533</span>
<span id="L534" rel="#L534">534</span>
<span id="L535" rel="#L535">535</span>
<span id="L536" rel="#L536">536</span>
<span id="L537" rel="#L537">537</span>
<span id="L538" rel="#L538">538</span>
<span id="L539" rel="#L539">539</span>
<span id="L540" rel="#L540">540</span>
<span id="L541" rel="#L541">541</span>
<span id="L542" rel="#L542">542</span>
<span id="L543" rel="#L543">543</span>
<span id="L544" rel="#L544">544</span>
<span id="L545" rel="#L545">545</span>
<span id="L546" rel="#L546">546</span>
<span id="L547" rel="#L547">547</span>
<span id="L548" rel="#L548">548</span>
<span id="L549" rel="#L549">549</span>
<span id="L550" rel="#L550">550</span>
<span id="L551" rel="#L551">551</span>
<span id="L552" rel="#L552">552</span>
<span id="L553" rel="#L553">553</span>
<span id="L554" rel="#L554">554</span>
<span id="L555" rel="#L555">555</span>
<span id="L556" rel="#L556">556</span>
<span id="L557" rel="#L557">557</span>
<span id="L558" rel="#L558">558</span>
<span id="L559" rel="#L559">559</span>
<span id="L560" rel="#L560">560</span>
<span id="L561" rel="#L561">561</span>
<span id="L562" rel="#L562">562</span>
<span id="L563" rel="#L563">563</span>
<span id="L564" rel="#L564">564</span>
<span id="L565" rel="#L565">565</span>
<span id="L566" rel="#L566">566</span>
<span id="L567" rel="#L567">567</span>
<span id="L568" rel="#L568">568</span>
<span id="L569" rel="#L569">569</span>
<span id="L570" rel="#L570">570</span>
<span id="L571" rel="#L571">571</span>
<span id="L572" rel="#L572">572</span>
<span id="L573" rel="#L573">573</span>
<span id="L574" rel="#L574">574</span>
<span id="L575" rel="#L575">575</span>
<span id="L576" rel="#L576">576</span>
<span id="L577" rel="#L577">577</span>
<span id="L578" rel="#L578">578</span>
<span id="L579" rel="#L579">579</span>
<span id="L580" rel="#L580">580</span>
<span id="L581" rel="#L581">581</span>
<span id="L582" rel="#L582">582</span>
<span id="L583" rel="#L583">583</span>
<span id="L584" rel="#L584">584</span>
<span id="L585" rel="#L585">585</span>
<span id="L586" rel="#L586">586</span>
<span id="L587" rel="#L587">587</span>
<span id="L588" rel="#L588">588</span>
<span id="L589" rel="#L589">589</span>
<span id="L590" rel="#L590">590</span>
<span id="L591" rel="#L591">591</span>
<span id="L592" rel="#L592">592</span>
<span id="L593" rel="#L593">593</span>
<span id="L594" rel="#L594">594</span>
<span id="L595" rel="#L595">595</span>
<span id="L596" rel="#L596">596</span>
<span id="L597" rel="#L597">597</span>
<span id="L598" rel="#L598">598</span>
<span id="L599" rel="#L599">599</span>
<span id="L600" rel="#L600">600</span>
<span id="L601" rel="#L601">601</span>
<span id="L602" rel="#L602">602</span>
<span id="L603" rel="#L603">603</span>
<span id="L604" rel="#L604">604</span>
<span id="L605" rel="#L605">605</span>
<span id="L606" rel="#L606">606</span>
<span id="L607" rel="#L607">607</span>
<span id="L608" rel="#L608">608</span>
<span id="L609" rel="#L609">609</span>
<span id="L610" rel="#L610">610</span>
<span id="L611" rel="#L611">611</span>
<span id="L612" rel="#L612">612</span>
<span id="L613" rel="#L613">613</span>

            </td>
            <td class="blob-line-code">
                    <div class="highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><span class="sd">/**</span></div><div class='line' id='LC3'><span class="sd"> * Dokuwiki installation assistance</span></div><div class='line' id='LC4'><span class="sd"> *</span></div><div class='line' id='LC5'><span class="sd"> * @author      Chris Smith &lt;chris@jalakai.co.uk&gt;</span></div><div class='line' id='LC6'><span class="sd"> */</span></div><div class='line' id='LC7'><br/></div><div class='line' id='LC8'><span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nb">defined</span><span class="p">(</span><span class="s1">&#39;DOKU_INC&#39;</span><span class="p">))</span> <span class="nb">define</span><span class="p">(</span><span class="s1">&#39;DOKU_INC&#39;</span><span class="p">,</span><span class="nb">dirname</span><span class="p">(</span><span class="k">__FILE__</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;/&#39;</span><span class="p">);</span></div><div class='line' id='LC9'><span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nb">defined</span><span class="p">(</span><span class="s1">&#39;DOKU_CONF&#39;</span><span class="p">))</span> <span class="nb">define</span><span class="p">(</span><span class="s1">&#39;DOKU_CONF&#39;</span><span class="p">,</span><span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;conf/&#39;</span><span class="p">);</span></div><div class='line' id='LC10'><span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nb">defined</span><span class="p">(</span><span class="s1">&#39;DOKU_LOCAL&#39;</span><span class="p">))</span> <span class="nb">define</span><span class="p">(</span><span class="s1">&#39;DOKU_LOCAL&#39;</span><span class="p">,</span><span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;conf/&#39;</span><span class="p">);</span></div><div class='line' id='LC11'><br/></div><div class='line' id='LC12'><span class="k">require_once</span><span class="p">(</span><span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;inc/PassHash.class.php&#39;</span><span class="p">);</span></div><div class='line' id='LC13'><br/></div><div class='line' id='LC14'><span class="c1">// check for error reporting override or set error reporting to sane values</span></div><div class='line' id='LC15'><span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">defined</span><span class="p">(</span><span class="s1">&#39;DOKU_E_LEVEL&#39;</span><span class="p">))</span> <span class="p">{</span> <span class="nb">error_reporting</span><span class="p">(</span><span class="k">E_ALL</span> <span class="o">^</span> <span class="nx">E_NOTICE</span><span class="p">);</span> <span class="p">}</span></div><div class='line' id='LC16'><span class="k">else</span> <span class="p">{</span> <span class="nb">error_reporting</span><span class="p">(</span><span class="nx">DOKU_E_LEVEL</span><span class="p">);</span> <span class="p">}</span></div><div class='line' id='LC17'><br/></div><div class='line' id='LC18'><span class="c1">// kill magic quotes</span></div><div class='line' id='LC19'><span class="k">if</span> <span class="p">(</span><span class="nb">get_magic_quotes_gpc</span><span class="p">()</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="nb">defined</span><span class="p">(</span><span class="s1">&#39;MAGIC_QUOTES_STRIPPED&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC20'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$_GET</span><span class="p">))</span>    <span class="nx">remove_magic_quotes</span><span class="p">(</span><span class="nv">$_GET</span><span class="p">);</span></div><div class='line' id='LC21'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">))</span>   <span class="nx">remove_magic_quotes</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">);</span></div><div class='line' id='LC22'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$_COOKIE</span><span class="p">))</span> <span class="nx">remove_magic_quotes</span><span class="p">(</span><span class="nv">$_COOKIE</span><span class="p">);</span></div><div class='line' id='LC23'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">))</span> <span class="nx">remove_magic_quotes</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">);</span></div><div class='line' id='LC24'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">@</span><span class="nb">ini_set</span><span class="p">(</span><span class="s1">&#39;magic_quotes_gpc&#39;</span><span class="p">,</span> <span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC25'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">define</span><span class="p">(</span><span class="s1">&#39;MAGIC_QUOTES_STRIPPED&#39;</span><span class="p">,</span><span class="mi">1</span><span class="p">);</span></div><div class='line' id='LC26'><span class="p">}</span></div><div class='line' id='LC27'><span class="k">if</span> <span class="p">(</span><span class="nb">function_exists</span><span class="p">(</span><span class="s1">&#39;set_magic_quotes_runtime&#39;</span><span class="p">))</span> <span class="o">@</span><span class="nb">set_magic_quotes_runtime</span><span class="p">(</span><span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC28'><span class="o">@</span><span class="nb">ini_set</span><span class="p">(</span><span class="s1">&#39;magic_quotes_sybase&#39;</span><span class="p">,</span><span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC29'><br/></div><div class='line' id='LC30'><span class="c1">// language strings</span></div><div class='line' id='LC31'><span class="k">require_once</span><span class="p">(</span><span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;inc/lang/en/lang.php&#39;</span><span class="p">);</span></div><div class='line' id='LC32'><span class="k">if</span><span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;l&#39;</span><span class="p">])</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;l&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC33'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$LC</span> <span class="o">=</span> <span class="nb">preg_replace</span><span class="p">(</span><span class="s1">&#39;/[^a-z\-]+/&#39;</span><span class="p">,</span><span class="s1">&#39;&#39;</span><span class="p">,</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;l&#39;</span><span class="p">]);</span></div><div class='line' id='LC34'><span class="p">}</span></div><div class='line' id='LC35'><span class="k">if</span><span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$LC</span><span class="p">))</span> <span class="nv">$LC</span> <span class="o">=</span> <span class="s1">&#39;en&#39;</span><span class="p">;</span></div><div class='line' id='LC36'><span class="k">if</span><span class="p">(</span><span class="nv">$LC</span> <span class="o">&amp;&amp;</span> <span class="nv">$LC</span> <span class="o">!=</span> <span class="s1">&#39;en&#39;</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC37'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">require_once</span><span class="p">(</span><span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;inc/lang/&#39;</span><span class="o">.</span><span class="nv">$LC</span><span class="o">.</span><span class="s1">&#39;/lang.php&#39;</span><span class="p">);</span></div><div class='line' id='LC38'><span class="p">}</span></div><div class='line' id='LC39'><br/></div><div class='line' id='LC40'><span class="c1">// initialise variables ...</span></div><div class='line' id='LC41'><span class="nv">$error</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC42'><br/></div><div class='line' id='LC43'><span class="nv">$dokuwiki_hash</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC44'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;2005-09-22&#39;</span>   <span class="o">=&gt;</span> <span class="s1">&#39;e33223e957b0b0a130d0520db08f8fb7&#39;</span><span class="p">,</span></div><div class='line' id='LC45'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;2006-03-05&#39;</span>   <span class="o">=&gt;</span> <span class="s1">&#39;51295727f79ab9af309a2fd9e0b61acc&#39;</span><span class="p">,</span></div><div class='line' id='LC46'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;2006-03-09&#39;</span>   <span class="o">=&gt;</span> <span class="s1">&#39;51295727f79ab9af309a2fd9e0b61acc&#39;</span><span class="p">,</span></div><div class='line' id='LC47'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;2006-11-06&#39;</span>   <span class="o">=&gt;</span> <span class="s1">&#39;b3a8af76845977c2000d85d6990dd72b&#39;</span><span class="p">,</span></div><div class='line' id='LC48'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;2007-05-24&#39;</span>   <span class="o">=&gt;</span> <span class="s1">&#39;d80f2740c84c4a6a791fd3c7a353536f&#39;</span><span class="p">,</span></div><div class='line' id='LC49'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;2007-06-26&#39;</span>   <span class="o">=&gt;</span> <span class="s1">&#39;b3ca19c7a654823144119980be73cd77&#39;</span><span class="p">,</span></div><div class='line' id='LC50'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;2008-05-04&#39;</span>   <span class="o">=&gt;</span> <span class="s1">&#39;1e5c42eac3219d9e21927c39e3240aad&#39;</span><span class="p">,</span></div><div class='line' id='LC51'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;2009-02-14&#39;</span>   <span class="o">=&gt;</span> <span class="s1">&#39;ec8c04210732a14fdfce0f7f6eead865&#39;</span><span class="p">,</span></div><div class='line' id='LC52'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;2009-12-25&#39;</span>   <span class="o">=&gt;</span> <span class="s1">&#39;993c4b2b385643efe5abf8e7010e11f4&#39;</span><span class="p">,</span></div><div class='line' id='LC53'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;2010-11-07&#39;</span>   <span class="o">=&gt;</span> <span class="s1">&#39;7921d48195f4db21b8ead6d9bea801b8&#39;</span><span class="p">,</span></div><div class='line' id='LC54'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;2011-05-25&#39;</span>   <span class="o">=&gt;</span> <span class="s1">&#39;4241865472edb6fa14a1227721008072&#39;</span><span class="p">,</span></div><div class='line' id='LC55'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;2011-11-10&#39;</span>   <span class="o">=&gt;</span> <span class="s1">&#39;b46ff19a7587966ac4df61cbab1b8b31&#39;</span><span class="p">,</span></div><div class='line' id='LC56'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;2012-01-25&#39;</span>   <span class="o">=&gt;</span> <span class="s1">&#39;72c083c73608fc43c586901fd5dabb74&#39;</span><span class="p">,</span></div><div class='line' id='LC57'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;2012-09-10&#39;</span>   <span class="o">=&gt;</span> <span class="s1">&#39;eb0b3fc90056fbc12bac6f49f7764df3&#39;</span><span class="p">,</span></div><div class='line' id='LC58'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;2013-05-10&#39;</span>   <span class="o">=&gt;</span> <span class="s1">&#39;7b62b75245f57f122d3e0f8ed7989623&#39;</span><span class="p">,</span></div><div class='line' id='LC59'><span class="p">);</span></div><div class='line' id='LC60'><br/></div><div class='line' id='LC61'><br/></div><div class='line' id='LC62'><span class="c1">// begin output</span></div><div class='line' id='LC63'><span class="nx">header</span><span class="p">(</span><span class="s1">&#39;Content-Type: text/html; charset=utf-8&#39;</span><span class="p">);</span></div><div class='line' id='LC64'><span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC65'><span class="x">&lt;!DOCTYPE html&gt;</span></div><div class='line' id='LC66'><span class="x">&lt;html lang=&quot;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$LC</span><span class="cp">?&gt;</span><span class="x">&quot; dir=&quot;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;direction&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x">&quot;&gt;</span></div><div class='line' id='LC67'><span class="x">&lt;head&gt;</span></div><div class='line' id='LC68'><span class="x">    &lt;meta charset=&quot;utf-8&quot; /&gt;</span></div><div class='line' id='LC69'><span class="x">    &lt;title&gt;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_installer&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x">&lt;/title&gt;</span></div><div class='line' id='LC70'><span class="x">    &lt;style type=&quot;text/css&quot;&gt;</span></div><div class='line' id='LC71'><span class="x">        body { width: 90%; margin: 0 auto; font: 84% Verdana, Helvetica, Arial, sans-serif; }</span></div><div class='line' id='LC72'><span class="x">        img { border: none }</span></div><div class='line' id='LC73'><span class="x">        br.cl { clear:both; }</span></div><div class='line' id='LC74'><span class="x">        code { font-size: 110%; color: #800000; }</span></div><div class='line' id='LC75'><span class="x">        fieldset { border: none }</span></div><div class='line' id='LC76'><span class="x">        label { display: block; margin-top: 0.5em; }</span></div><div class='line' id='LC77'><span class="x">        select.text, input.text { width: 30em; margin: 0 0.5em; }</span></div><div class='line' id='LC78'><span class="x">        a {text-decoration: none}</span></div><div class='line' id='LC79'><span class="x">    &lt;/style&gt;</span></div><div class='line' id='LC80'><span class="x">    &lt;script type=&quot;text/javascript&quot;&gt;</span></div><div class='line' id='LC81'><span class="x">        function acltoggle(){</span></div><div class='line' id='LC82'><span class="x">            var cb = document.getElementById(&#39;acl&#39;);</span></div><div class='line' id='LC83'><span class="x">            var fs = document.getElementById(&#39;acldep&#39;);</span></div><div class='line' id='LC84'><span class="x">            if(!cb || !fs) return;</span></div><div class='line' id='LC85'><span class="x">            if(cb.checked){</span></div><div class='line' id='LC86'><span class="x">                fs.style.display = &#39;&#39;;</span></div><div class='line' id='LC87'><span class="x">            }else{</span></div><div class='line' id='LC88'><span class="x">                fs.style.display = &#39;none&#39;;</span></div><div class='line' id='LC89'><span class="x">            }</span></div><div class='line' id='LC90'><span class="x">        }</span></div><div class='line' id='LC91'><span class="x">        window.onload = function(){</span></div><div class='line' id='LC92'><span class="x">            acltoggle();</span></div><div class='line' id='LC93'><span class="x">            var cb = document.getElementById(&#39;acl&#39;);</span></div><div class='line' id='LC94'><span class="x">            if(cb) cb.onchange = acltoggle;</span></div><div class='line' id='LC95'><span class="x">        };</span></div><div class='line' id='LC96'><span class="x">    &lt;/script&gt;</span></div><div class='line' id='LC97'><span class="x">&lt;/head&gt;</span></div><div class='line' id='LC98'><span class="x">&lt;body style=&quot;&quot;&gt;</span></div><div class='line' id='LC99'><span class="x">    &lt;h1 style=&quot;float:left&quot;&gt;</span></div><div class='line' id='LC100'><span class="x">        &lt;img src=&quot;lib/exe/fetch.php?media=wiki:dokuwiki-128.png&quot;</span></div><div class='line' id='LC101'><span class="x">             style=&quot;vertical-align: middle;&quot; alt=&quot;&quot; height=&quot;64&quot; width=&quot;64&quot; /&gt;</span></div><div class='line' id='LC102'><span class="x">        </span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_installer&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC103'><span class="x">    &lt;/h1&gt;</span></div><div class='line' id='LC104'><span class="x">    &lt;div style=&quot;float:right; margin: 1em;&quot;&gt;</span></div><div class='line' id='LC105'><span class="x">        </span><span class="cp">&lt;?php</span> <span class="nx">langsel</span><span class="p">()</span><span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC106'><span class="x">    &lt;/div&gt;</span></div><div class='line' id='LC107'><span class="x">    &lt;br class=&quot;cl&quot; /&gt;</span></div><div class='line' id='LC108'><br/></div><div class='line' id='LC109'><span class="x">    &lt;div style=&quot;float: right; width: 34%;&quot;&gt;</span></div><div class='line' id='LC110'><span class="x">        </span><span class="cp">&lt;?php</span></div><div class='line' id='LC111'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">@</span><span class="nb">file_exists</span><span class="p">(</span><span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;inc/lang/&#39;</span><span class="o">.</span><span class="nv">$LC</span><span class="o">.</span><span class="s1">&#39;/install.html&#39;</span><span class="p">)){</span></div><div class='line' id='LC112'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">include</span><span class="p">(</span><span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;inc/lang/&#39;</span><span class="o">.</span><span class="nv">$LC</span><span class="o">.</span><span class="s1">&#39;/install.html&#39;</span><span class="p">);</span></div><div class='line' id='LC113'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span><span class="k">else</span><span class="p">{</span></div><div class='line' id='LC114'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">print</span> <span class="s2">&quot;&lt;div lang=</span><span class="se">\&quot;</span><span class="s2">en</span><span class="se">\&quot;</span><span class="s2"> dir=</span><span class="se">\&quot;</span><span class="s2">ltr</span><span class="se">\&quot;</span><span class="s2">&gt;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC115'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">include</span><span class="p">(</span><span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;inc/lang/en/install.html&#39;</span><span class="p">);</span></div><div class='line' id='LC116'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">print</span> <span class="s2">&quot;&lt;/div&gt;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC117'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC118'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC119'><span class="x">        &lt;a style=&quot;background: transparent url(data/security.png) left top no-repeat;</span></div><div class='line' id='LC120'><span class="x">                  display: block; width:380px; height:73px; border:none; clear:both;&quot;</span></div><div class='line' id='LC121'><span class="x">           target=&quot;_blank&quot;</span></div><div class='line' id='LC122'><span class="x">           href=&quot;http://www.dokuwiki.org/security#web_access_security&quot;&gt;&lt;/a&gt;</span></div><div class='line' id='LC123'><span class="x">    &lt;/div&gt;</span></div><div class='line' id='LC124'><br/></div><div class='line' id='LC125'><span class="x">    &lt;div style=&quot;float: left; width: 58%;&quot;&gt;</span></div><div class='line' id='LC126'><span class="x">        </span><span class="cp">&lt;?php</span></div><div class='line' id='LC127'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span> <span class="p">(</span><span class="nx">check_functions</span><span class="p">()</span> <span class="o">&amp;&amp;</span> <span class="nx">check_permissions</span><span class="p">())</span> <span class="p">){</span></div><div class='line' id='LC128'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="s1">&#39;&lt;p&gt;&#39;</span><span class="o">.</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_problems&#39;</span><span class="p">]</span><span class="o">.</span><span class="s1">&#39;&lt;/p&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC129'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">print_errors</span><span class="p">();</span></div><div class='line' id='LC130'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">print_retry</span><span class="p">();</span></div><div class='line' id='LC131'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span><span class="k">elseif</span><span class="p">(</span><span class="o">!</span><span class="nx">check_configs</span><span class="p">()){</span></div><div class='line' id='LC132'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="s1">&#39;&lt;p&gt;&#39;</span><span class="o">.</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_modified&#39;</span><span class="p">]</span><span class="o">.</span><span class="s1">&#39;&lt;/p&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC133'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">print_errors</span><span class="p">();</span></div><div class='line' id='LC134'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span><span class="k">elseif</span><span class="p">(</span><span class="nx">check_data</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;d&#39;</span><span class="p">])){</span></div><div class='line' id='LC135'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// check_data has sanitized all input parameters</span></div><div class='line' id='LC136'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nx">store_data</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;d&#39;</span><span class="p">])){</span></div><div class='line' id='LC137'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="s1">&#39;&lt;p&gt;&#39;</span><span class="o">.</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_failure&#39;</span><span class="p">]</span><span class="o">.</span><span class="s1">&#39;&lt;/p&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC138'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">print_errors</span><span class="p">();</span></div><div class='line' id='LC139'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span><span class="k">else</span><span class="p">{</span></div><div class='line' id='LC140'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="s1">&#39;&lt;p&gt;&#39;</span><span class="o">.</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_success&#39;</span><span class="p">]</span><span class="o">.</span><span class="s1">&#39;&lt;/p&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC141'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC142'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span><span class="k">else</span><span class="p">{</span></div><div class='line' id='LC143'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">print_errors</span><span class="p">();</span></div><div class='line' id='LC144'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">print_form</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;d&#39;</span><span class="p">]);</span></div><div class='line' id='LC145'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC146'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC147'><span class="x">    &lt;/div&gt;</span></div><div class='line' id='LC148'><br/></div><div class='line' id='LC149'><br/></div><div class='line' id='LC150'><span class="x">&lt;div style=&quot;clear: both&quot;&gt;</span></div><div class='line' id='LC151'><span class="x">  &lt;a href=&quot;http://dokuwiki.org/&quot;&gt;&lt;img src=&quot;lib/tpl/dokuwiki/images/button-dw.png&quot; alt=&quot;driven by DokuWiki&quot; /&gt;&lt;/a&gt;</span></div><div class='line' id='LC152'><span class="x">  &lt;a href=&quot;http://www.php.net&quot;&gt;&lt;img src=&quot;lib/tpl/dokuwiki/images/button-php.gif&quot; alt=&quot;powered by PHP&quot; /&gt;&lt;/a&gt;</span></div><div class='line' id='LC153'><span class="x">&lt;/div&gt;</span></div><div class='line' id='LC154'><span class="x">&lt;/body&gt;</span></div><div class='line' id='LC155'><span class="x">&lt;/html&gt;</span></div><div class='line' id='LC156'><span class="cp">&lt;?php</span></div><div class='line' id='LC157'><br/></div><div class='line' id='LC158'><span class="sd">/**</span></div><div class='line' id='LC159'><span class="sd"> * Print the input form</span></div><div class='line' id='LC160'><span class="sd"> */</span></div><div class='line' id='LC161'><span class="k">function</span> <span class="nf">print_form</span><span class="p">(</span><span class="nv">$d</span><span class="p">){</span></div><div class='line' id='LC162'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">global</span> <span class="nv">$lang</span><span class="p">;</span></div><div class='line' id='LC163'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">global</span> <span class="nv">$LC</span><span class="p">;</span></div><div class='line' id='LC164'><br/></div><div class='line' id='LC165'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">include</span><span class="p">(</span><span class="nx">DOKU_CONF</span><span class="o">.</span><span class="s1">&#39;license.php&#39;</span><span class="p">);</span></div><div class='line' id='LC166'><br/></div><div class='line' id='LC167'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$d</span><span class="p">))</span> <span class="nv">$d</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC168'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$d</span> <span class="o">=</span> <span class="nb">array_map</span><span class="p">(</span><span class="s1">&#39;htmlspecialchars&#39;</span><span class="p">,</span><span class="nv">$d</span><span class="p">);</span></div><div class='line' id='LC169'><br/></div><div class='line' id='LC170'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;acl&#39;</span><span class="p">]))</span> <span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;acl&#39;</span><span class="p">]</span><span class="o">=</span><span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC171'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;pop&#39;</span><span class="p">]))</span> <span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;pop&#39;</span><span class="p">]</span><span class="o">=</span><span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC172'><br/></div><div class='line' id='LC173'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC174'><span class="x">    &lt;form action=&quot;&quot; method=&quot;post&quot;&gt;</span></div><div class='line' id='LC175'><span class="x">    &lt;input type=&quot;hidden&quot; name=&quot;l&quot; value=&quot;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$LC</span> <span class="cp">?&gt;</span><span class="x">&quot; /&gt;</span></div><div class='line' id='LC176'><span class="x">    &lt;fieldset&gt;</span></div><div class='line' id='LC177'><span class="x">        &lt;label for=&quot;title&quot;&gt;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_wikiname&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC178'><span class="x">        &lt;input type=&quot;text&quot; name=&quot;d[title]&quot; id=&quot;title&quot; value=&quot;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;title&#39;</span><span class="p">]</span> <span class="cp">?&gt;</span><span class="x">&quot; style=&quot;width: 20em;&quot; /&gt;</span></div><div class='line' id='LC179'><span class="x">        &lt;/label&gt;</span></div><div class='line' id='LC180'><br/></div><div class='line' id='LC181'><span class="x">        &lt;fieldset style=&quot;margin-top: 1em;&quot;&gt;</span></div><div class='line' id='LC182'><span class="x">            &lt;label for=&quot;acl&quot;&gt;</span></div><div class='line' id='LC183'><span class="x">            &lt;input type=&quot;checkbox&quot; name=&quot;d[acl]&quot; id=&quot;acl&quot; </span><span class="cp">&lt;?php</span> <span class="k">echo</span><span class="p">((</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;acl&#39;</span><span class="p">]</span> <span class="o">?</span> <span class="s1">&#39; checked=&quot;checked&quot;&#39;</span> <span class="o">:</span> <span class="s1">&#39;&#39;</span><span class="p">));</span><span class="cp">?&gt;</span><span class="x"> /&gt;</span></div><div class='line' id='LC184'><span class="x">            </span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_enableacl&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x">&lt;/label&gt;</span></div><div class='line' id='LC185'><br/></div><div class='line' id='LC186'><span class="x">            &lt;fieldset id=&quot;acldep&quot;&gt;</span></div><div class='line' id='LC187'><span class="x">                &lt;label for=&quot;superuser&quot;&gt;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_superuser&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x">&lt;/label&gt;</span></div><div class='line' id='LC188'><span class="x">                &lt;input class=&quot;text&quot; type=&quot;text&quot; name=&quot;d[superuser]&quot; id=&quot;superuser&quot; value=&quot;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;superuser&#39;</span><span class="p">]</span> <span class="cp">?&gt;</span><span class="x">&quot; /&gt;</span></div><div class='line' id='LC189'><br/></div><div class='line' id='LC190'><span class="x">                &lt;label for=&quot;fullname&quot;&gt;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;fullname&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x">&lt;/label&gt;</span></div><div class='line' id='LC191'><span class="x">                &lt;input class=&quot;text&quot; type=&quot;text&quot; name=&quot;d[fullname]&quot; id=&quot;fullname&quot; value=&quot;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;fullname&#39;</span><span class="p">]</span> <span class="cp">?&gt;</span><span class="x">&quot; /&gt;</span></div><div class='line' id='LC192'><br/></div><div class='line' id='LC193'><span class="x">                &lt;label for=&quot;email&quot;&gt;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;email&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x">&lt;/label&gt;</span></div><div class='line' id='LC194'><span class="x">                &lt;input class=&quot;text&quot; type=&quot;text&quot; name=&quot;d[email]&quot; id=&quot;email&quot; value=&quot;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;email&#39;</span><span class="p">]</span> <span class="cp">?&gt;</span><span class="x">&quot; /&gt;</span></div><div class='line' id='LC195'><br/></div><div class='line' id='LC196'><span class="x">                &lt;label for=&quot;password&quot;&gt;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;pass&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x">&lt;/label&gt;</span></div><div class='line' id='LC197'><span class="x">                &lt;input class=&quot;text&quot; type=&quot;password&quot; name=&quot;d[password]&quot; id=&quot;password&quot; /&gt;</span></div><div class='line' id='LC198'><br/></div><div class='line' id='LC199'><span class="x">                &lt;label for=&quot;confirm&quot;&gt;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;passchk&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x">&lt;/label&gt;</span></div><div class='line' id='LC200'><span class="x">                &lt;input class=&quot;text&quot; type=&quot;password&quot; name=&quot;d[confirm]&quot; id=&quot;confirm&quot; /&gt;</span></div><div class='line' id='LC201'><br/></div><div class='line' id='LC202'><span class="x">                &lt;label for=&quot;policy&quot;&gt;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_policy&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x">&lt;/label&gt;</span></div><div class='line' id='LC203'><span class="x">                &lt;select class=&quot;text&quot; name=&quot;d[policy]&quot; id=&quot;policy&quot;&gt;</span></div><div class='line' id='LC204'><span class="x">                    &lt;option value=&quot;0&quot; </span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;policy&#39;</span><span class="p">]</span> <span class="o">==</span> <span class="mi">0</span><span class="p">)</span><span class="o">?</span><span class="s1">&#39;selected=&quot;selected&quot;&#39;</span><span class="o">:</span><span class="s1">&#39;&#39;</span> <span class="cp">?&gt;</span><span class="x">&gt;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_pol0&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x">&lt;/option&gt;</span></div><div class='line' id='LC205'><span class="x">                    &lt;option value=&quot;1&quot; </span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;policy&#39;</span><span class="p">]</span> <span class="o">==</span> <span class="mi">1</span><span class="p">)</span><span class="o">?</span><span class="s1">&#39;selected=&quot;selected&quot;&#39;</span><span class="o">:</span><span class="s1">&#39;&#39;</span> <span class="cp">?&gt;</span><span class="x">&gt;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_pol1&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x">&lt;/option&gt;</span></div><div class='line' id='LC206'><span class="x">                    &lt;option value=&quot;2&quot; </span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;policy&#39;</span><span class="p">]</span> <span class="o">==</span> <span class="mi">2</span><span class="p">)</span><span class="o">?</span><span class="s1">&#39;selected=&quot;selected&quot;&#39;</span><span class="o">:</span><span class="s1">&#39;&#39;</span> <span class="cp">?&gt;</span><span class="x">&gt;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_pol2&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x">&lt;/option&gt;</span></div><div class='line' id='LC207'><span class="x">                &lt;/select&gt;</span></div><div class='line' id='LC208'><br/></div><div class='line' id='LC209'><span class="x">            &lt;/fieldset&gt;</span></div><div class='line' id='LC210'><span class="x">        &lt;/fieldset&gt;</span></div><div class='line' id='LC211'><br/></div><div class='line' id='LC212'><span class="x">        &lt;fieldset&gt;</span></div><div class='line' id='LC213'><span class="x">            &lt;p&gt;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_license&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x">&lt;/p&gt;</span></div><div class='line' id='LC214'><span class="x">            </span><span class="cp">&lt;?php</span></div><div class='line' id='LC215'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">array_push</span><span class="p">(</span><span class="nv">$license</span><span class="p">,</span><span class="k">array</span><span class="p">(</span><span class="s1">&#39;name&#39;</span> <span class="o">=&gt;</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_license_none&#39;</span><span class="p">],</span> <span class="s1">&#39;url&#39;</span><span class="o">=&gt;</span><span class="s1">&#39;&#39;</span><span class="p">));</span></div><div class='line' id='LC216'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;license&#39;</span><span class="p">]))</span> <span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;license&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;cc-by-sa&#39;</span><span class="p">;</span></div><div class='line' id='LC217'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span><span class="p">(</span><span class="nv">$license</span> <span class="k">as</span> <span class="nv">$key</span> <span class="o">=&gt;</span> <span class="nv">$lic</span><span class="p">){</span></div><div class='line' id='LC218'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="s1">&#39;&lt;label for=&quot;lic_&#39;</span><span class="o">.</span><span class="nv">$key</span><span class="o">.</span><span class="s1">&#39;&quot;&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC219'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="s1">&#39;&lt;input type=&quot;radio&quot; name=&quot;d[license]&quot; value=&quot;&#39;</span><span class="o">.</span><span class="nb">htmlspecialchars</span><span class="p">(</span><span class="nv">$key</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;&quot; id=&quot;lic_&#39;</span><span class="o">.</span><span class="nv">$key</span><span class="o">.</span><span class="s1">&#39;&quot;&#39;</span><span class="o">.</span></div><div class='line' id='LC220'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">((</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;license&#39;</span><span class="p">]</span> <span class="o">===</span> <span class="nv">$key</span><span class="p">)</span><span class="o">?</span><span class="s1">&#39; checked=&quot;checked&quot;&#39;</span><span class="o">:</span><span class="s1">&#39;&#39;</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC221'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="nb">htmlspecialchars</span><span class="p">(</span><span class="nv">$lic</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">]);</span></div><div class='line' id='LC222'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$lic</span><span class="p">[</span><span class="s1">&#39;url&#39;</span><span class="p">])</span> <span class="k">echo</span> <span class="s1">&#39; &lt;a href=&quot;&#39;</span><span class="o">.</span><span class="nv">$lic</span><span class="p">[</span><span class="s1">&#39;url&#39;</span><span class="p">]</span><span class="o">.</span><span class="s1">&#39;&quot; target=&quot;_blank&quot;&gt;&lt;sup&gt;[?]&lt;/sup&gt;&lt;/a&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC223'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="s1">&#39;&lt;/label&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC224'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC225'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC226'><span class="x">        &lt;/fieldset&gt;</span></div><div class='line' id='LC227'><br/></div><div class='line' id='LC228'><span class="x">        &lt;fieldset&gt;</span></div><div class='line' id='LC229'><span class="x">            &lt;p&gt;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_pop_field&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x">&lt;/p&gt;</span></div><div class='line' id='LC230'><span class="x">            &lt;label for=&quot;pop&quot;&gt;</span></div><div class='line' id='LC231'><span class="x">                &lt;input type=&quot;checkbox&quot; name=&quot;d[pop]&quot; id=&quot;pop&quot; </span><span class="cp">&lt;?php</span> <span class="k">echo</span><span class="p">((</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;pop&#39;</span><span class="p">]</span> <span class="o">?</span> <span class="s1">&#39; checked=&quot;checked&quot;&#39;</span> <span class="o">:</span> <span class="s1">&#39;&#39;</span><span class="p">));</span><span class="cp">?&gt;</span><span class="x"> /&gt;</span></div><div class='line' id='LC232'><span class="x">                </span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_pop_label&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x"> &lt;a href=&quot;http://www.dokuwiki.org/popularity&quot; target=&quot;_blank&quot;&gt;&lt;sup&gt;[?]&lt;/sup&gt;&lt;/a&gt;</span></div><div class='line' id='LC233'><span class="x">            &lt;/label&gt;</span></div><div class='line' id='LC234'><span class="x">        &lt;/fieldset&gt;</span></div><div class='line' id='LC235'><br/></div><div class='line' id='LC236'><span class="x">    &lt;/fieldset&gt;</span></div><div class='line' id='LC237'><span class="x">    &lt;fieldset id=&quot;process&quot;&gt;</span></div><div class='line' id='LC238'><span class="x">        &lt;input class=&quot;button&quot; type=&quot;submit&quot; name=&quot;submit&quot; value=&quot;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;btn_save&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x">&quot; /&gt;</span></div><div class='line' id='LC239'><span class="x">    &lt;/fieldset&gt;</span></div><div class='line' id='LC240'><span class="x">    &lt;/form&gt;</span></div><div class='line' id='LC241'><span class="x">    </span><span class="cp">&lt;?php</span></div><div class='line' id='LC242'><span class="p">}</span></div><div class='line' id='LC243'><br/></div><div class='line' id='LC244'><span class="k">function</span> <span class="nf">print_retry</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC245'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">global</span> <span class="nv">$lang</span><span class="p">;</span></div><div class='line' id='LC246'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">global</span> <span class="nv">$LC</span><span class="p">;</span></div><div class='line' id='LC247'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC248'><span class="x">    &lt;form action=&quot;&quot; method=&quot;get&quot;&gt;</span></div><div class='line' id='LC249'><span class="x">      &lt;fieldset&gt;</span></div><div class='line' id='LC250'><span class="x">        &lt;input type=&quot;hidden&quot; name=&quot;l&quot; value=&quot;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$LC</span> <span class="cp">?&gt;</span><span class="x">&quot; /&gt;</span></div><div class='line' id='LC251'><span class="x">        &lt;input class=&quot;button&quot; type=&quot;submit&quot; value=&quot;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_retry&#39;</span><span class="p">];</span><span class="cp">?&gt;</span><span class="x">&quot; /&gt;</span></div><div class='line' id='LC252'><span class="x">      &lt;/fieldset&gt;</span></div><div class='line' id='LC253'><span class="x">    &lt;/form&gt;</span></div><div class='line' id='LC254'><span class="x">    </span><span class="cp">&lt;?php</span></div><div class='line' id='LC255'><span class="p">}</span></div><div class='line' id='LC256'><br/></div><div class='line' id='LC257'><span class="sd">/**</span></div><div class='line' id='LC258'><span class="sd"> * Check validity of data</span></div><div class='line' id='LC259'><span class="sd"> *</span></div><div class='line' id='LC260'><span class="sd"> * @author Andreas Gohr</span></div><div class='line' id='LC261'><span class="sd"> */</span></div><div class='line' id='LC262'><span class="k">function</span> <span class="nf">check_data</span><span class="p">(</span><span class="o">&amp;</span><span class="nv">$d</span><span class="p">){</span></div><div class='line' id='LC263'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">static</span> <span class="nv">$form_default</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC264'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;title&#39;</span>     <span class="o">=&gt;</span> <span class="s1">&#39;&#39;</span><span class="p">,</span></div><div class='line' id='LC265'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;acl&#39;</span>       <span class="o">=&gt;</span> <span class="s1">&#39;1&#39;</span><span class="p">,</span></div><div class='line' id='LC266'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;superuser&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;&#39;</span><span class="p">,</span></div><div class='line' id='LC267'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;fullname&#39;</span>  <span class="o">=&gt;</span> <span class="s1">&#39;&#39;</span><span class="p">,</span></div><div class='line' id='LC268'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;email&#39;</span>     <span class="o">=&gt;</span> <span class="s1">&#39;&#39;</span><span class="p">,</span></div><div class='line' id='LC269'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;password&#39;</span>  <span class="o">=&gt;</span> <span class="s1">&#39;&#39;</span><span class="p">,</span></div><div class='line' id='LC270'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;confirm&#39;</span>   <span class="o">=&gt;</span> <span class="s1">&#39;&#39;</span><span class="p">,</span></div><div class='line' id='LC271'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;policy&#39;</span>    <span class="o">=&gt;</span> <span class="s1">&#39;0&#39;</span><span class="p">,</span></div><div class='line' id='LC272'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;license&#39;</span>   <span class="o">=&gt;</span> <span class="s1">&#39;cc-by-sa&#39;</span></div><div class='line' id='LC273'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC274'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">global</span> <span class="nv">$lang</span><span class="p">;</span></div><div class='line' id='LC275'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">global</span> <span class="nv">$error</span><span class="p">;</span></div><div class='line' id='LC276'><br/></div><div class='line' id='LC277'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$d</span><span class="p">))</span> <span class="nv">$d</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC278'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span><span class="p">(</span><span class="nv">$d</span> <span class="k">as</span> <span class="nv">$k</span> <span class="o">=&gt;</span> <span class="nv">$v</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC279'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$v</span><span class="p">))</span></div><div class='line' id='LC280'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">unset</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="nv">$k</span><span class="p">]);</span></div><div class='line' id='LC281'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">else</span></div><div class='line' id='LC282'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$d</span><span class="p">[</span><span class="nv">$k</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span><span class="nv">$v</span><span class="p">;</span></div><div class='line' id='LC283'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC284'><br/></div><div class='line' id='LC285'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//autolowercase the username</span></div><div class='line' id='LC286'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;superuser&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;superuser&#39;</span><span class="p">])</span> <span class="o">?</span> <span class="nx">strtolower</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;superuser&#39;</span><span class="p">])</span> <span class="o">:</span> <span class="s2">&quot;&quot;</span><span class="p">;</span></div><div class='line' id='LC287'><br/></div><div class='line' id='LC288'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC289'><br/></div><div class='line' id='LC290'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;submit&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC291'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC292'><br/></div><div class='line' id='LC293'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// check input</span></div><div class='line' id='LC294'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;title&#39;</span><span class="p">])){</span></div><div class='line' id='LC295'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$error</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_badval&#39;</span><span class="p">],</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_wikiname&#39;</span><span class="p">]);</span></div><div class='line' id='LC296'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span>      <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC297'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC298'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;acl&#39;</span><span class="p">])){</span></div><div class='line' id='LC299'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;/^[a-z0-9_]+$/&#39;</span><span class="p">,</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;superuser&#39;</span><span class="p">])){</span></div><div class='line' id='LC300'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$error</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_badval&#39;</span><span class="p">],</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_superuser&#39;</span><span class="p">]);</span></div><div class='line' id='LC301'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span>      <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC302'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC303'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;password&#39;</span><span class="p">])){</span></div><div class='line' id='LC304'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$error</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_badval&#39;</span><span class="p">],</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;pass&#39;</span><span class="p">]);</span></div><div class='line' id='LC305'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span>      <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC306'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC307'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">elseif</span><span class="p">(</span><span class="o">!</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;confirm&#39;</span><span class="p">])</span> <span class="o">||</span> <span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;confirm&#39;</span><span class="p">]</span> <span class="o">!=</span> <span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;password&#39;</span><span class="p">]){</span></div><div class='line' id='LC308'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$error</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_badval&#39;</span><span class="p">],</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;passchk&#39;</span><span class="p">]);</span></div><div class='line' id='LC309'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span>      <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC310'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC311'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;fullname&#39;</span><span class="p">])</span> <span class="o">||</span> <span class="nx">strstr</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;fullname&#39;</span><span class="p">],</span><span class="s1">&#39;:&#39;</span><span class="p">)){</span></div><div class='line' id='LC312'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$error</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_badval&#39;</span><span class="p">],</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;fullname&#39;</span><span class="p">]);</span></div><div class='line' id='LC313'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span>      <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC314'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC315'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;email&#39;</span><span class="p">])</span> <span class="o">||</span> <span class="nx">strstr</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;email&#39;</span><span class="p">],</span><span class="s1">&#39;:&#39;</span><span class="p">)</span> <span class="o">||</span> <span class="o">!</span><span class="nx">strstr</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;email&#39;</span><span class="p">],</span><span class="s1">&#39;@&#39;</span><span class="p">)){</span></div><div class='line' id='LC316'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$error</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_badval&#39;</span><span class="p">],</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;email&#39;</span><span class="p">]);</span></div><div class='line' id='LC317'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span>      <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC318'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC319'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC320'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC321'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$d</span> <span class="o">=</span> <span class="nb">array_merge</span><span class="p">(</span><span class="nv">$form_default</span><span class="p">,</span> <span class="nv">$d</span><span class="p">);</span></div><div class='line' id='LC322'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$ok</span><span class="p">;</span></div><div class='line' id='LC323'><span class="p">}</span></div><div class='line' id='LC324'><br/></div><div class='line' id='LC325'><span class="sd">/**</span></div><div class='line' id='LC326'><span class="sd"> * Writes the data to the config files</span></div><div class='line' id='LC327'><span class="sd"> *</span></div><div class='line' id='LC328'><span class="sd"> * @author  Chris Smith &lt;chris@jalakai.co.uk&gt;</span></div><div class='line' id='LC329'><span class="sd"> */</span></div><div class='line' id='LC330'><span class="k">function</span> <span class="nf">store_data</span><span class="p">(</span><span class="nv">$d</span><span class="p">){</span></div><div class='line' id='LC331'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">global</span> <span class="nv">$LC</span><span class="p">;</span></div><div class='line' id='LC332'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC333'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;policy&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span><span class="nx">int</span><span class="p">)</span> <span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;policy&#39;</span><span class="p">];</span></div><div class='line' id='LC334'><br/></div><div class='line' id='LC335'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// create local.php</span></div><div class='line' id='LC336'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$now</span>    <span class="o">=</span> <span class="nb">gmdate</span><span class="p">(</span><span class="s1">&#39;r&#39;</span><span class="p">);</span></div><div class='line' id='LC337'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$output</span> <span class="o">=</span> <span class="s">&lt;&lt;&lt;EOT</span></div><div class='line' id='LC338'><span class="s">&lt;?php</span></div><div class='line' id='LC339'><span class="s">/**</span></div><div class='line' id='LC340'><span class="s"> * Dokuwiki&#39;s Main Configuration File - Local Settings</span></div><div class='line' id='LC341'><span class="s"> * Auto-generated by install script</span></div><div class='line' id='LC342'><span class="s"> * Date: $now</span></div><div class='line' id='LC343'><span class="s"> */</span></div><div class='line' id='LC344'><br/></div><div class='line' id='LC345'><span class="s">EOT;</span></div><div class='line' id='LC346'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$output</span> <span class="o">.=</span> <span class="s1">&#39;$conf[\&#39;title\&#39;] = \&#39;&#39;</span><span class="o">.</span><span class="nb">addslashes</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;title&#39;</span><span class="p">])</span><span class="o">.</span><span class="s2">&quot;&#39;;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC347'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$output</span> <span class="o">.=</span> <span class="s1">&#39;$conf[\&#39;lang\&#39;] = \&#39;&#39;</span><span class="o">.</span><span class="nb">addslashes</span><span class="p">(</span><span class="nv">$LC</span><span class="p">)</span><span class="o">.</span><span class="s2">&quot;&#39;;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC348'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$output</span> <span class="o">.=</span> <span class="s1">&#39;$conf[\&#39;license\&#39;] = \&#39;&#39;</span><span class="o">.</span><span class="nb">addslashes</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;license&#39;</span><span class="p">])</span><span class="o">.</span><span class="s2">&quot;&#39;;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC349'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;acl&#39;</span><span class="p">]){</span></div><div class='line' id='LC350'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$output</span> <span class="o">.=</span> <span class="s1">&#39;$conf[\&#39;useacl\&#39;] = 1&#39;</span><span class="o">.</span><span class="s2">&quot;;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC351'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$output</span> <span class="o">.=</span> <span class="s2">&quot;</span><span class="se">\$</span><span class="s2">conf[&#39;superuser&#39;] = &#39;@admin&#39;;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC352'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC353'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span> <span class="o">=</span> <span class="nv">$ok</span> <span class="o">&amp;&amp;</span> <span class="nx">fileWrite</span><span class="p">(</span><span class="nx">DOKU_LOCAL</span><span class="o">.</span><span class="s1">&#39;local.php&#39;</span><span class="p">,</span><span class="nv">$output</span><span class="p">);</span></div><div class='line' id='LC354'><br/></div><div class='line' id='LC355'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;acl&#39;</span><span class="p">])</span> <span class="p">{</span></div><div class='line' id='LC356'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// hash the password</span></div><div class='line' id='LC357'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$phash</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">PassHash</span><span class="p">();</span></div><div class='line' id='LC358'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$pass</span> <span class="o">=</span> <span class="nv">$phash</span><span class="o">-&gt;</span><span class="na">hash_smd5</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;password&#39;</span><span class="p">]);</span></div><div class='line' id='LC359'><br/></div><div class='line' id='LC360'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// create users.auth.php</span></div><div class='line' id='LC361'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// --- user:SMD5password:Real Name:email:groups,comma,seperated</span></div><div class='line' id='LC362'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$output</span> <span class="o">=</span> <span class="nb">join</span><span class="p">(</span><span class="s2">&quot;:&quot;</span><span class="p">,</span><span class="k">array</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;superuser&#39;</span><span class="p">],</span> <span class="nv">$pass</span><span class="p">,</span> <span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;fullname&#39;</span><span class="p">],</span> <span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;email&#39;</span><span class="p">],</span> <span class="s1">&#39;admin,user&#39;</span><span class="p">));</span></div><div class='line' id='LC363'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$output</span> <span class="o">=</span> <span class="o">@</span><span class="nb">file_get_contents</span><span class="p">(</span><span class="nx">DOKU_CONF</span><span class="o">.</span><span class="s1">&#39;users.auth.php.dist&#39;</span><span class="p">)</span><span class="o">.</span><span class="s2">&quot;</span><span class="se">\n</span><span class="si">$output</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC364'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span> <span class="o">=</span> <span class="nv">$ok</span> <span class="o">&amp;&amp;</span> <span class="nx">fileWrite</span><span class="p">(</span><span class="nx">DOKU_LOCAL</span><span class="o">.</span><span class="s1">&#39;users.auth.php&#39;</span><span class="p">,</span> <span class="nv">$output</span><span class="p">);</span></div><div class='line' id='LC365'><br/></div><div class='line' id='LC366'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// create acl.auth.php</span></div><div class='line' id='LC367'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$output</span> <span class="o">=</span> <span class="s">&lt;&lt;&lt;EOT</span></div><div class='line' id='LC368'><span class="s"># acl.auth.php</span></div><div class='line' id='LC369'><span class="s"># &lt;?php exit()?&gt;</span></div><div class='line' id='LC370'><span class="s"># Don&#39;t modify the lines above</span></div><div class='line' id='LC371'><span class="s">#</span></div><div class='line' id='LC372'><span class="s"># Access Control Lists</span></div><div class='line' id='LC373'><span class="s">#</span></div><div class='line' id='LC374'><span class="s"># Auto-generated by install script</span></div><div class='line' id='LC375'><span class="s"># Date: $now</span></div><div class='line' id='LC376'><br/></div><div class='line' id='LC377'><span class="s">EOT;</span></div><div class='line' id='LC378'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;policy&#39;</span><span class="p">]</span> <span class="o">==</span> <span class="mi">2</span><span class="p">){</span></div><div class='line' id='LC379'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$output</span> <span class="o">.=</span>  <span class="s2">&quot;*               @ALL          0</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC380'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$output</span> <span class="o">.=</span>  <span class="s2">&quot;*               @user         8</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC381'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span><span class="k">elseif</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;policy&#39;</span><span class="p">]</span> <span class="o">==</span> <span class="mi">1</span><span class="p">){</span></div><div class='line' id='LC382'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$output</span> <span class="o">.=</span>  <span class="s2">&quot;*               @ALL          1</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC383'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$output</span> <span class="o">.=</span>  <span class="s2">&quot;*               @user         8</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC384'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span><span class="k">else</span><span class="p">{</span></div><div class='line' id='LC385'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$output</span> <span class="o">.=</span>  <span class="s2">&quot;*               @ALL          8</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC386'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC387'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span> <span class="o">=</span> <span class="nv">$ok</span> <span class="o">&amp;&amp;</span> <span class="nx">fileWrite</span><span class="p">(</span><span class="nx">DOKU_LOCAL</span><span class="o">.</span><span class="s1">&#39;acl.auth.php&#39;</span><span class="p">,</span> <span class="nv">$output</span><span class="p">);</span></div><div class='line' id='LC388'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC389'><br/></div><div class='line' id='LC390'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// enable popularity submission</span></div><div class='line' id='LC391'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$d</span><span class="p">[</span><span class="s1">&#39;pop&#39;</span><span class="p">]){</span></div><div class='line' id='LC392'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">@</span><span class="nb">touch</span><span class="p">(</span><span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;data/cache/autosubmit.txt&#39;</span><span class="p">);</span></div><div class='line' id='LC393'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC394'><br/></div><div class='line' id='LC395'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// disable auth plugins til needed</span></div><div class='line' id='LC396'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$output</span> <span class="o">=</span> <span class="s">&lt;&lt;&lt;EOT</span></div><div class='line' id='LC397'><span class="s">&lt;?php</span></div><div class='line' id='LC398'><span class="s">/*</span></div><div class='line' id='LC399'><span class="s"> * Local plugin enable/disable settings</span></div><div class='line' id='LC400'><span class="s"> *</span></div><div class='line' id='LC401'><span class="s"> * Auto-generated by install script</span></div><div class='line' id='LC402'><span class="s"> * Date: $now</span></div><div class='line' id='LC403'><span class="s"> */</span></div><div class='line' id='LC404'><br/></div><div class='line' id='LC405'><span class="s">\$plugins[&#39;authad&#39;]    = 0;</span></div><div class='line' id='LC406'><span class="s">\$plugins[&#39;authldap&#39;]  = 0;</span></div><div class='line' id='LC407'><span class="s">\$plugins[&#39;authmysql&#39;] = 0;</span></div><div class='line' id='LC408'><span class="s">\$plugins[&#39;authpgsql&#39;] = 0;</span></div><div class='line' id='LC409'><br/></div><div class='line' id='LC410'><span class="s">EOT;</span></div><div class='line' id='LC411'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span> <span class="o">=</span> <span class="nv">$ok</span> <span class="o">&amp;&amp;</span> <span class="nx">fileWrite</span><span class="p">(</span><span class="nx">DOKU_LOCAL</span><span class="o">.</span><span class="s1">&#39;plugins.local.php&#39;</span><span class="p">,</span> <span class="nv">$output</span><span class="p">);</span></div><div class='line' id='LC412'><br/></div><div class='line' id='LC413'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$ok</span><span class="p">;</span></div><div class='line' id='LC414'><span class="p">}</span></div><div class='line' id='LC415'><br/></div><div class='line' id='LC416'><span class="sd">/**</span></div><div class='line' id='LC417'><span class="sd"> * Write the given content to a file</span></div><div class='line' id='LC418'><span class="sd"> *</span></div><div class='line' id='LC419'><span class="sd"> * @author  Chris Smith &lt;chris@jalakai.co.uk&gt;</span></div><div class='line' id='LC420'><span class="sd"> */</span></div><div class='line' id='LC421'><span class="k">function</span> <span class="nf">fileWrite</span><span class="p">(</span><span class="nv">$filename</span><span class="p">,</span> <span class="nv">$data</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC422'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">global</span> <span class="nv">$error</span><span class="p">;</span></div><div class='line' id='LC423'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">global</span> <span class="nv">$lang</span><span class="p">;</span></div><div class='line' id='LC424'><br/></div><div class='line' id='LC425'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">((</span><span class="nv">$fp</span> <span class="o">=</span> <span class="o">@</span><span class="nb">fopen</span><span class="p">(</span><span class="nv">$filename</span><span class="p">,</span> <span class="s1">&#39;wb&#39;</span><span class="p">))</span> <span class="o">===</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC426'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$filename</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="nv">$_SERVER</span><span class="p">[</span><span class="s1">&#39;DOCUMENT_ROOT&#39;</span><span class="p">],</span><span class="s1">&#39;{DOCUMENT_ROOT}/&#39;</span><span class="p">,</span> <span class="nv">$filename</span><span class="p">);</span></div><div class='line' id='LC427'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$error</span><span class="p">[]</span>  <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_writeerr&#39;</span><span class="p">],</span><span class="nv">$filename</span><span class="p">);</span></div><div class='line' id='LC428'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC429'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC430'><br/></div><div class='line' id='LC431'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$data</span><span class="p">))</span> <span class="p">{</span> <span class="nb">fwrite</span><span class="p">(</span><span class="nv">$fp</span><span class="p">,</span> <span class="nv">$data</span><span class="p">);</span>  <span class="p">}</span></div><div class='line' id='LC432'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">fclose</span><span class="p">(</span><span class="nv">$fp</span><span class="p">);</span></div><div class='line' id='LC433'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC434'><span class="p">}</span></div><div class='line' id='LC435'><br/></div><div class='line' id='LC436'><br/></div><div class='line' id='LC437'><span class="sd">/**</span></div><div class='line' id='LC438'><span class="sd"> * check installation dependent local config files and tests for a known</span></div><div class='line' id='LC439'><span class="sd"> * unmodified main config file</span></div><div class='line' id='LC440'><span class="sd"> *</span></div><div class='line' id='LC441'><span class="sd"> * @author      Chris Smith &lt;chris@jalakai.co.uk&gt;</span></div><div class='line' id='LC442'><span class="sd"> */</span></div><div class='line' id='LC443'><span class="k">function</span> <span class="nf">check_configs</span><span class="p">(){</span></div><div class='line' id='LC444'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">global</span> <span class="nv">$error</span><span class="p">;</span></div><div class='line' id='LC445'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">global</span> <span class="nv">$lang</span><span class="p">;</span></div><div class='line' id='LC446'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">global</span> <span class="nv">$dokuwiki_hash</span><span class="p">;</span></div><div class='line' id='LC447'><br/></div><div class='line' id='LC448'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC449'><br/></div><div class='line' id='LC450'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$config_files</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC451'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;local&#39;</span> <span class="o">=&gt;</span> <span class="nx">DOKU_LOCAL</span><span class="o">.</span><span class="s1">&#39;local.php&#39;</span><span class="p">,</span></div><div class='line' id='LC452'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;users&#39;</span> <span class="o">=&gt;</span> <span class="nx">DOKU_LOCAL</span><span class="o">.</span><span class="s1">&#39;users.auth.php&#39;</span><span class="p">,</span></div><div class='line' id='LC453'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;auth&#39;</span>  <span class="o">=&gt;</span> <span class="nx">DOKU_LOCAL</span><span class="o">.</span><span class="s1">&#39;acl.auth.php&#39;</span></div><div class='line' id='LC454'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC455'><br/></div><div class='line' id='LC456'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// main dokuwiki config file (conf/dokuwiki.php) must not have been modified</span></div><div class='line' id='LC457'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$installation_hash</span> <span class="o">=</span> <span class="nb">md5</span><span class="p">(</span><span class="nb">preg_replace</span><span class="p">(</span><span class="s2">&quot;/(</span><span class="se">\015\012</span><span class="s2">)|(</span><span class="se">\015</span><span class="s2">)/&quot;</span><span class="p">,</span><span class="s2">&quot;</span><span class="se">\012</span><span class="s2">&quot;</span><span class="p">,</span></div><div class='line' id='LC458'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">@</span><span class="nb">file_get_contents</span><span class="p">(</span><span class="nx">DOKU_CONF</span><span class="o">.</span><span class="s1">&#39;dokuwiki.php&#39;</span><span class="p">)));</span></div><div class='line' id='LC459'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">in_array</span><span class="p">(</span><span class="nv">$installation_hash</span><span class="p">,</span> <span class="nv">$dokuwiki_hash</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC460'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$error</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_badhash&#39;</span><span class="p">],</span><span class="nv">$installation_hash</span><span class="p">);</span></div><div class='line' id='LC461'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC462'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC463'><br/></div><div class='line' id='LC464'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// configs shouldn&#39;t exist</span></div><div class='line' id='LC465'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$config_files</span> <span class="k">as</span> <span class="nv">$file</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC466'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">@</span><span class="nb">file_exists</span><span class="p">(</span><span class="nv">$file</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nb">filesize</span><span class="p">(</span><span class="nv">$file</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC467'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$file</span>    <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="nv">$_SERVER</span><span class="p">[</span><span class="s1">&#39;DOCUMENT_ROOT&#39;</span><span class="p">],</span><span class="s1">&#39;{DOCUMENT_ROOT}/&#39;</span><span class="p">,</span> <span class="nv">$file</span><span class="p">);</span></div><div class='line' id='LC468'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$error</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_confexists&#39;</span><span class="p">],</span><span class="nv">$file</span><span class="p">);</span></div><div class='line' id='LC469'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span>      <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC470'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC471'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC472'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$ok</span><span class="p">;</span></div><div class='line' id='LC473'><span class="p">}</span></div><div class='line' id='LC474'><br/></div><div class='line' id='LC475'><br/></div><div class='line' id='LC476'><span class="sd">/**</span></div><div class='line' id='LC477'><span class="sd"> * Check other installation dir/file permission requirements</span></div><div class='line' id='LC478'><span class="sd"> *</span></div><div class='line' id='LC479'><span class="sd"> * @author      Chris Smith &lt;chris@jalakai.co.uk&gt;</span></div><div class='line' id='LC480'><span class="sd"> */</span></div><div class='line' id='LC481'><span class="k">function</span> <span class="nf">check_permissions</span><span class="p">(){</span></div><div class='line' id='LC482'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">global</span> <span class="nv">$error</span><span class="p">;</span></div><div class='line' id='LC483'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">global</span> <span class="nv">$lang</span><span class="p">;</span></div><div class='line' id='LC484'><br/></div><div class='line' id='LC485'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$dirs</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC486'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;conf&#39;</span>        <span class="o">=&gt;</span> <span class="nx">DOKU_LOCAL</span><span class="p">,</span></div><div class='line' id='LC487'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;data&#39;</span>        <span class="o">=&gt;</span> <span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;data&#39;</span><span class="p">,</span></div><div class='line' id='LC488'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;pages&#39;</span>       <span class="o">=&gt;</span> <span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;data/pages&#39;</span><span class="p">,</span></div><div class='line' id='LC489'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;attic&#39;</span>       <span class="o">=&gt;</span> <span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;data/attic&#39;</span><span class="p">,</span></div><div class='line' id='LC490'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;media&#39;</span>       <span class="o">=&gt;</span> <span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;data/media&#39;</span><span class="p">,</span></div><div class='line' id='LC491'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;media_attic&#39;</span> <span class="o">=&gt;</span> <span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;data/media_attic&#39;</span><span class="p">,</span></div><div class='line' id='LC492'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;media_meta&#39;</span>  <span class="o">=&gt;</span> <span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;data/media_meta&#39;</span><span class="p">,</span></div><div class='line' id='LC493'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;meta&#39;</span>        <span class="o">=&gt;</span> <span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;data/meta&#39;</span><span class="p">,</span></div><div class='line' id='LC494'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;cache&#39;</span>       <span class="o">=&gt;</span> <span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;data/cache&#39;</span><span class="p">,</span></div><div class='line' id='LC495'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;locks&#39;</span>       <span class="o">=&gt;</span> <span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;data/locks&#39;</span><span class="p">,</span></div><div class='line' id='LC496'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;index&#39;</span>       <span class="o">=&gt;</span> <span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;data/index&#39;</span><span class="p">,</span></div><div class='line' id='LC497'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;tmp&#39;</span>         <span class="o">=&gt;</span> <span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;data/tmp&#39;</span></div><div class='line' id='LC498'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC499'><br/></div><div class='line' id='LC500'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC501'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span><span class="p">(</span><span class="nv">$dirs</span> <span class="k">as</span> <span class="nv">$dir</span><span class="p">){</span></div><div class='line' id='LC502'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!@</span><span class="nb">file_exists</span><span class="p">(</span><span class="s2">&quot;</span><span class="si">$dir</span><span class="s2">/.&quot;</span><span class="p">)</span> <span class="o">||</span> <span class="o">!@</span><span class="nb">is_writable</span><span class="p">(</span><span class="nv">$dir</span><span class="p">)){</span></div><div class='line' id='LC503'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$dir</span>     <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="nv">$_SERVER</span><span class="p">[</span><span class="s1">&#39;DOCUMENT_ROOT&#39;</span><span class="p">],</span><span class="s1">&#39;{DOCUMENT_ROOT}&#39;</span><span class="p">,</span> <span class="nv">$dir</span><span class="p">);</span></div><div class='line' id='LC504'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$error</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_permfail&#39;</span><span class="p">],</span><span class="nv">$dir</span><span class="p">);</span></div><div class='line' id='LC505'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span>      <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC506'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC507'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC508'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$ok</span><span class="p">;</span></div><div class='line' id='LC509'><span class="p">}</span></div><div class='line' id='LC510'><br/></div><div class='line' id='LC511'><span class="sd">/**</span></div><div class='line' id='LC512'><span class="sd"> * Check the availability of functions used in DokuWiki and the PHP version</span></div><div class='line' id='LC513'><span class="sd"> *</span></div><div class='line' id='LC514'><span class="sd"> * @author Andreas Gohr &lt;andi@splitbrain.org&gt;</span></div><div class='line' id='LC515'><span class="sd"> */</span></div><div class='line' id='LC516'><span class="k">function</span> <span class="nf">check_functions</span><span class="p">(){</span></div><div class='line' id='LC517'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">global</span> <span class="nv">$error</span><span class="p">;</span></div><div class='line' id='LC518'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">global</span> <span class="nv">$lang</span><span class="p">;</span></div><div class='line' id='LC519'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC520'><br/></div><div class='line' id='LC521'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">version_compare</span><span class="p">(</span><span class="nb">phpversion</span><span class="p">(),</span><span class="s1">&#39;5.2.0&#39;</span><span class="p">,</span><span class="s1">&#39;&lt;&#39;</span><span class="p">)){</span></div><div class='line' id='LC522'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$error</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_phpver&#39;</span><span class="p">],</span><span class="nb">phpversion</span><span class="p">(),</span><span class="s1">&#39;5.2.0&#39;</span><span class="p">);</span></div><div class='line' id='LC523'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC524'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC525'><br/></div><div class='line' id='LC526'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$funcs</span> <span class="o">=</span> <span class="nb">explode</span><span class="p">(</span><span class="s1">&#39; &#39;</span><span class="p">,</span><span class="s1">&#39;addslashes call_user_func chmod copy fgets &#39;</span><span class="o">.</span></div><div class='line' id='LC527'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;file file_exists fseek flush filesize ftell fopen &#39;</span><span class="o">.</span></div><div class='line' id='LC528'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;glob header ignore_user_abort ini_get mail mkdir &#39;</span><span class="o">.</span></div><div class='line' id='LC529'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;ob_start opendir parse_ini_file readfile realpath &#39;</span><span class="o">.</span></div><div class='line' id='LC530'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;rename rmdir serialize session_start unlink usleep &#39;</span><span class="o">.</span></div><div class='line' id='LC531'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;preg_replace file_get_contents htmlspecialchars_decode &#39;</span><span class="o">.</span></div><div class='line' id='LC532'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;spl_autoload_register stream_select fsockopen pack&#39;</span><span class="p">);</span></div><div class='line' id='LC533'><br/></div><div class='line' id='LC534'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">function_exists</span><span class="p">(</span><span class="s1">&#39;mb_substr&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC535'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$funcs</span><span class="p">[]</span> <span class="o">=</span> <span class="s1">&#39;utf8_encode&#39;</span><span class="p">;</span></div><div class='line' id='LC536'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$funcs</span><span class="p">[]</span> <span class="o">=</span> <span class="s1">&#39;utf8_decode&#39;</span><span class="p">;</span></div><div class='line' id='LC537'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC538'><br/></div><div class='line' id='LC539'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span><span class="p">(</span><span class="nv">$funcs</span> <span class="k">as</span> <span class="nv">$func</span><span class="p">){</span></div><div class='line' id='LC540'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nb">function_exists</span><span class="p">(</span><span class="nv">$func</span><span class="p">)){</span></div><div class='line' id='LC541'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$error</span><span class="p">[]</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_funcna&#39;</span><span class="p">],</span><span class="nv">$func</span><span class="p">);</span></div><div class='line' id='LC542'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ok</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC543'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC544'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC545'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$ok</span><span class="p">;</span></div><div class='line' id='LC546'><span class="p">}</span></div><div class='line' id='LC547'><br/></div><div class='line' id='LC548'><span class="sd">/**</span></div><div class='line' id='LC549'><span class="sd"> * Print language selection</span></div><div class='line' id='LC550'><span class="sd"> *</span></div><div class='line' id='LC551'><span class="sd"> * @author Andreas Gohr &lt;andi@splitbrain.org&gt;</span></div><div class='line' id='LC552'><span class="sd"> */</span></div><div class='line' id='LC553'><span class="k">function</span> <span class="nf">langsel</span><span class="p">(){</span></div><div class='line' id='LC554'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">global</span> <span class="nv">$lang</span><span class="p">;</span></div><div class='line' id='LC555'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">global</span> <span class="nv">$LC</span><span class="p">;</span></div><div class='line' id='LC556'><br/></div><div class='line' id='LC557'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$dir</span> <span class="o">=</span> <span class="nx">DOKU_INC</span><span class="o">.</span><span class="s1">&#39;inc/lang&#39;</span><span class="p">;</span></div><div class='line' id='LC558'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$dh</span>  <span class="o">=</span> <span class="nb">opendir</span><span class="p">(</span><span class="nv">$dir</span><span class="p">);</span></div><div class='line' id='LC559'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nv">$dh</span><span class="p">)</span> <span class="k">return</span><span class="p">;</span></div><div class='line' id='LC560'><br/></div><div class='line' id='LC561'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$langs</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC562'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">while</span> <span class="p">((</span><span class="nv">$file</span> <span class="o">=</span> <span class="nb">readdir</span><span class="p">(</span><span class="nv">$dh</span><span class="p">))</span> <span class="o">!==</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC563'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;/^[\._]/&#39;</span><span class="p">,</span><span class="nv">$file</span><span class="p">))</span> <span class="k">continue</span><span class="p">;</span></div><div class='line' id='LC564'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">is_dir</span><span class="p">(</span><span class="nv">$dir</span><span class="o">.</span><span class="s1">&#39;/&#39;</span><span class="o">.</span><span class="nv">$file</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="o">@</span><span class="nb">file_exists</span><span class="p">(</span><span class="nv">$dir</span><span class="o">.</span><span class="s1">&#39;/&#39;</span><span class="o">.</span><span class="nv">$file</span><span class="o">.</span><span class="s1">&#39;/lang.php&#39;</span><span class="p">)){</span></div><div class='line' id='LC565'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$langs</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$file</span><span class="p">;</span></div><div class='line' id='LC566'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC567'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC568'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">closedir</span><span class="p">(</span><span class="nv">$dh</span><span class="p">);</span></div><div class='line' id='LC569'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">sort</span><span class="p">(</span><span class="nv">$langs</span><span class="p">);</span></div><div class='line' id='LC570'><br/></div><div class='line' id='LC571'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="s1">&#39;&lt;form action=&quot;&quot;&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC572'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;i_chooselang&#39;</span><span class="p">];</span></div><div class='line' id='LC573'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="s1">&#39;: &lt;select name=&quot;l&quot; onchange=&quot;submit()&quot;&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC574'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span><span class="p">(</span><span class="nv">$langs</span> <span class="k">as</span> <span class="nv">$l</span><span class="p">){</span></div><div class='line' id='LC575'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$sel</span> <span class="o">=</span> <span class="p">(</span><span class="nv">$l</span> <span class="o">==</span> <span class="nv">$LC</span><span class="p">)</span> <span class="o">?</span> <span class="s1">&#39;selected=&quot;selected&quot;&#39;</span> <span class="o">:</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC576'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="s1">&#39;&lt;option value=&quot;&#39;</span><span class="o">.</span><span class="nv">$l</span><span class="o">.</span><span class="s1">&#39;&quot; &#39;</span><span class="o">.</span><span class="nv">$sel</span><span class="o">.</span><span class="s1">&#39;&gt;&#39;</span><span class="o">.</span><span class="nv">$l</span><span class="o">.</span><span class="s1">&#39;&lt;/option&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC577'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC578'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="s1">&#39;&lt;/select&gt; &#39;</span><span class="p">;</span></div><div class='line' id='LC579'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="s1">&#39;&lt;input type=&quot;submit&quot; value=&quot;&#39;</span><span class="o">.</span><span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;btn_update&#39;</span><span class="p">]</span><span class="o">.</span><span class="s1">&#39;&quot; /&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC580'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="s1">&#39;&lt;/form&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC581'><span class="p">}</span></div><div class='line' id='LC582'><br/></div><div class='line' id='LC583'><span class="sd">/**</span></div><div class='line' id='LC584'><span class="sd"> * Print global error array</span></div><div class='line' id='LC585'><span class="sd"> *</span></div><div class='line' id='LC586'><span class="sd"> * @author Andreas Gohr &lt;andi@splitbrain.org&gt;</span></div><div class='line' id='LC587'><span class="sd"> */</span></div><div class='line' id='LC588'><span class="k">function</span> <span class="nf">print_errors</span><span class="p">(){</span></div><div class='line' id='LC589'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">global</span> <span class="nv">$error</span><span class="p">;</span></div><div class='line' id='LC590'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$error</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC591'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="s1">&#39;&lt;ul&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC592'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$error</span> <span class="k">as</span> <span class="nv">$err</span><span class="p">){</span></div><div class='line' id='LC593'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="s2">&quot;&lt;li&gt;</span><span class="si">$err</span><span class="s2">&lt;/li&gt;&quot;</span><span class="p">;</span></div><div class='line' id='LC594'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC595'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="s1">&#39;&lt;/ul&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC596'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC597'><span class="p">}</span></div><div class='line' id='LC598'><br/></div><div class='line' id='LC599'><span class="sd">/**</span></div><div class='line' id='LC600'><span class="sd"> * remove magic quotes recursivly</span></div><div class='line' id='LC601'><span class="sd"> *</span></div><div class='line' id='LC602'><span class="sd"> * @author Andreas Gohr &lt;andi@splitbrain.org&gt;</span></div><div class='line' id='LC603'><span class="sd"> */</span></div><div class='line' id='LC604'><span class="k">function</span> <span class="nf">remove_magic_quotes</span><span class="p">(</span><span class="o">&amp;</span><span class="nv">$array</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC605'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nb">array_keys</span><span class="p">(</span><span class="nv">$array</span><span class="p">)</span> <span class="k">as</span> <span class="nv">$key</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC606'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$array</span><span class="p">[</span><span class="nv">$key</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC607'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">remove_magic_quotes</span><span class="p">(</span><span class="nv">$array</span><span class="p">[</span><span class="nv">$key</span><span class="p">]);</span></div><div class='line' id='LC608'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span><span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC609'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$array</span><span class="p">[</span><span class="nv">$key</span><span class="p">]</span> <span class="o">=</span> <span class="nb">stripslashes</span><span class="p">(</span><span class="nv">$array</span><span class="p">[</span><span class="nv">$key</span><span class="p">]);</span></div><div class='line' id='LC610'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC611'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC612'><span class="p">}</span></div><div class='line' id='LC613'><br/></div></pre></div>
            </td>
          </tr>
        </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2013 <span title="0.09541s from github-fe133-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
          <div class="suggester-container">
              <div class="suggester fullscreen-suggester js-navigation-container" id="fullscreen_suggester"
                 data-url="/calltella/dokuwiki/suggestions/commit">
              </div>
          </div>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped leftwards" title="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped leftwards"
      title="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-remove-close close ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>

  </body>
</html>

