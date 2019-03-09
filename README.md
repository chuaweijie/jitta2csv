# Introduction
This project is created as a workaround for myself to be able to get the data that I'm following from [Jitta](https://www.jitta.com) easily. I do not have the patience nor the interest to write this into a full fledged program. If you are interseted, feel free to fork this and make it better. 


# Installation
## Windows
1. Download [WAMP](http://www.wampserver.com/en/). I recommend WAMP for the ease of setup. You could also install and configure [Apache](https://httpd.apache.org/) + [PHP](https://secure.php.net/downloads.php) manually if that's your thing.
2. [Download jitta2csv](https://github.com/chuaweijie/jitta2csv/archive/master.zip)
3. Unzip jitta2csv-master.zip or whatever zip file that has been downloaded. 
4. Move the folder named jitta2csv-master inside the unzipped folder into the **www** folder inside your WAMP installation. 

## Mac
1. Download [MAMP](https://www.mamp.info/en/). I recommend MAMP for the ease of setup. You could also install and configure [Apache](https://httpd.apache.org/) + [PHP](https://secure.php.net/downloads.php) manually if that's your thing.
2. [Download jitta2csv](https://github.com/chuaweijie/jitta2csv/archive/master.zip)
3. Unzip jitta2csv-master.zip or whatever zip file that has been downloaded. 
4. Move the folder named jitta2csv-master inside the unzipped folder into the **htdocs** folder inside your MAMP installation. 


# Usage
1. Use Google chrome to access to [Jitta](https://www.jitta.com).
2. Follow stocks on [Jitta](https://www.jitta.com). If you've done this, skip and go to step 2. 
3. Scroll down to the end and make sure that all of your followed stocks are loaded. 
> From my experience, Jitta only loads up to 94 followed stocks. Anything more than that will not be loaded. 
4. Right click anywhere on the page and select inspect. 
5. Make sure that you are in the elements tab of Chrome's Developer's Tools. 
6. Scroll up all the way to the top of the HTML. Right click on the line that begins with `<html class`, select copy and then select copy outerHTML
7. Navigate to your jitta2csv-master folder in your WAMP/MAMP installation. 
8. Locate and open the file with the name input.html in a text editor.
9. Select all the text in input.html and paste what you've copied from Chrome's Developer's Tools. 
10. Save the file and close it. 
11. Fun your program from where your webserver is running. While your installation might be different, you'll most probably be able to access the program through localhost/jitta2cst-master/jitta2csv.php
12. Return to your jitta2csv-master folder in your WAMP/MAMP installation and the newest data from jitta will be in output.csv. 
>The result in ouput.csv will be replaced everytime you run jitta2csv.php. 
