# digi-x-internship-assessment-lightbulb-effect
Description: Click the light bulb to turn on and off


Solution ideas:
Since a CSS class called 'bulb-on' (which will turn on the bulb) is already exist in *style.css*, we can do an approach where
we just replace the existing class 'bulb-off' to 'bulb-on' and vice-versa to turn on and turn off the bulb.

Fix solution:
1. Add clickable element (a href) and wrap the existing div with id 'bulb' - file changed -> *index.html*
2. Add javascript function 'changeState' by using `onclick="changeState()"` - file changed -> *index.html*
3. In function 'changeState', use the `classList.toggle()` method to add the class 'bulb-on' - file changed -> *app.js*
4. `toggle()` act as a toggle method to add and remove class

_ALERT_ - this is the simplest solution but not the best since the 'bulb-off' class is not overwritten on click.