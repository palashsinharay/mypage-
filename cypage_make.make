; ----------------
; Generated makefile from http://drushmake.me
; Permanent URL: http://drushmake.me/file.php?token=2dd26bd9cf6a
; ----------------
;
; This is a working makefile - try it! Any line starting with a `;` is a comment.
  
; Core version
; ------------
; Each makefile should begin by declaring the core version of Drupal that all
; projects should be compatible with.
  
core = 6.x
  
; API version
; ------------
; Every makefile needs to declare its Drush Make API version. This version of
; drush make uses API version `2`.
  
api = 2
  
; Core project
; ------------
; In order for your makefile to generate a full Drupal site, you must include
; a core project. This is usually Drupal core, but you can also specify
; alternative core projects like Pressflow. Note that makefiles included with
; install profiles *should not* include a core project.
  
; Drupal 6.x core:
projects[drupal][version] = 6

  
  
; Modules
; --------
projects[admin_menu][version] = 1.8
projects[admin_menu][type] = "module"
projects[admin_menu][subdir] = "contrib"
projects[devel][version] = 1.27
projects[devel][type] = "module"
projects[devel][subdir] = "contrib"
projects[views][version] = 2.16
projects[views][type] = "module"
projects[views][subdir] = "contrib"

  

; Themes
; --------
projects[omega][version] = 1.0
projects[omega][type] = "theme"

  
  
; Libraries
; ---------
libraries[jquery][download][type] = "file"
libraries[jquery][download][url] = "https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"
libraries[jqueryui][download][type] = "file"
libraries[jqueryui][download][url] = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"

