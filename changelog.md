# Change Log

Team membership:  Teah Elaschuk (Captain) &  Nathan Miles 
Team conventions: Allman notation, markdown for changelog
Changelog format: [Markdown](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet)

## *Version 1.0.0*
Release Date: 2017-10-12

### Added
	- created starter project (TE)
	- created changelog (TE)

## *Version 1.0.1*
Release Date: 2017-10-12

### Added
    - models/Tasks.php: added task model (TE)
### Updated 
    - config/autoload.php: preloading model (TE)
    
## *Version 1.0.2*
Release Date: 2017-10-12
    
### Updated 
    - views/homepage.php updated to track the amount of issues and list the issues (NM)
    - core/MY_Controller.php updated the render (NM)
    - controllers/Welcome.php updated to allow connection to views/homepage.php 
    and update tasks and create a list of tasks (NM)

## *Version 1.0.3*
Release Date: 2017-10-14

### Added
    - views/template_secondary.php: modified the original template to have bootstrap panels for the two organized task lists (TE)
    - controllers/Views.php: controller for the Work page, handles retrieving and sorting data to be displayed (TE)
    - view/by_priority.php: the layout for the Tasks by Priority table on the Work page (TE)
    - view/by_category.php: the layout for the Tasks by Category table on the Work page (TE)
    
### Updated 
    - config/config.php: changed menu link for 'work' (TE)
    - models/Tasks.php: added getCategorizedTasks and orderByCategory functions (TE)
 
## *Version 1.0.4*
Release Date: 2017-10-15

### Added
    - libraries/Parsedown.php from a copy paste from a github account (NM)
    - data/jobs.md and added some fake jobs using the correct format (NM)
    - controllers/Helpme.php allowed for jobs.md to be loaded and displayed correctly (NM)
### Updated 
    - config/autoload.php updated path to parsedown.php library (NM)
    - config/config.php corrected path to helpme.php