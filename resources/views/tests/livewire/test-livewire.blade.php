@section('head')
    <title>Livewire | Test</title>
    <style>
        .hideMe {
            display: none;
        }

        .showMe {
            color: yellow;
        }
    </style>
@endsection
<div>
    <input id="" name="" type="checkbox" wire:model.live='showContent'>Show Content
    <p class='showMe'>############################</p>
    <button wire:click="alert()">Alert</button>

    @if ($showContent)
        @include('livewire.tests.other')
    @endif

    <br>
    <br>
    <br>

    <h1>Hello</h1>

    <b>Code {{ $code }}</b>
    <button id='btn-cooldown' wire:ignore>Start CoolDown</button>
    <button id='btn-code' wire:click='sendCode()'>Send Code</button>
    <p>Cooldown: {{ $timer }}</p>
</div>
@section('scripts')
    <script>
        Livewire.on('cooldown', () => {
            setTimeout(() => {
                var button = $("#btn-code");
                button.prop("disabled", true); // Disable the button

                var timer = 5;
                var countdownInterval = setInterval(function() {
                    button.text(timer + 's'); // Update the button text
                    timer--;

                    if (timer < 0) {
                        clearInterval(countdownInterval);
                        button.text("Send Code"); // Reset the button text
                        button.prop("disabled", false); // Enable the button
                    }
                }, 1000);
            });
        });

        $("#btn-cooldown").on("click", function() {
            var button = $(this); // Cache the button element
            button.prop("disabled", true); // Disable the button
            Livewire.dispatch('code');

            var timer = 5;
            var countdownInterval = setInterval(function() {
                button.text(timer + 's'); // Update the button text
                timer--;

                if (timer < 0) {
                    clearInterval(countdownInterval);
                    button.text("Start Cooldown"); // Reset the button text
                    button.prop("disabled", false); // Enable the button
                }
            }, 1000);
        });
    </script>
    <script>
        Livewire.on('alert', () => {
            alert('ahahah');
        });

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
@endsection
