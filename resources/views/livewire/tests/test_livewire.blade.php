<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Livewire | Test</title>
    <style>
        .hideMe {
            display: none;
        }

        .showMe {
            color: yellow;
        }
    </style>
    @livewireStyles()
</head>

<body>
    <h1>_______________The Body___________________</h1>
    @livewire('test-livewire')
    @livewireScripts()
    @stack('scripts')
    <script>
        function changeHTMLContent() {
            var newContent = "<p id='targetID'>New HTML content</p>";
            document.getElementById("myDiv").innerHTML = newContent;
        }
        // Get the target element by its ID
        var targetElement = document.getElementById('targetID');

        // Get the existing inline styles (if any)
        var existingStyles = targetElement.getAttribute('style');

        // Add the new style (in this case, we're adding a red color)
        var newStyle = 'color: red;';

        // Combine the existing styles with the new style
        if (existingStyles) {
            targetElement.setAttribute('style', existingStyles + ' ' + newStyle);
        } else {
            targetElement.setAttribute('style', newStyle);
        }
        let myElements = document.querySelectorAll(".targetx");

        for (let i = 0; i < myElements.length; i++) {
            myElements[i].style.color = 'blue';
        }
        // Get references to the button and the element to be toggled
        var toggleButton = document.getElementById("toggleButton");
        var myElement = document.getElementById("myElement");

        // Initial state: hide the element
        myElement.style.display = "none";

        // Add a click event listener to the button
        toggleButton.addEventListener("click", function() {
            // Toggle the display property between "none" and "block"
            if (myElement.style.display === "none") {
                myElement.style.display = "block";
            } else {
                myElement.style.display = "none";
            }
        });
    </script>
</body>

</html>
