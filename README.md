# Spam Detector
Simple Techniques to detect Form Spammer. 

#### The Basic idea, that we need to added a simple tricks to detect if we've **Spam** by added below checks :

Firstly, added an input text with random name, by default not having a value and not visible to normal users.
  If we've any value added in this field that meaning something weird here! 
 
Second Trick, added an input having value by detault and that value is microtime when page is loaded that time is used to check if the form was filled out 
too Quickly by also, checking it when submit a from by our middleware.
