Jeremy Simon - Lab 5
Part 1 - Looking at the documentation for the .on function, I removed the .each call on all the list elements and replaces it with the .on function, only called on the ul element since we expect the click to bubble to the ul first. We must specify in the arguments that we are expecting it to bubble from the li to the ul.

Part 2 -
1. Put the Javascript at the bottom of the page so the page loads the elements and then runs the for loop, improves rendering time
2. Deleted redundant code to reduce file size
3. Moved CSS to the top of the page so the background loads immediately
4. More efficient selector, lowers JQuery operating time
5. Moved files loaded from an external source into a resources folder to get rid of file loading times

Sources:
http://api.jquery.com/on/