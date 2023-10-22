<!DOCTYPE html>
<html>

<head>
    <title>Test | Controller</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>

<body>
    <h1>Test Controller</h1>
    <div>
        <p>Number: <span id="displayNumber">{{ $number }}</span></p>
        <button id="incrementButton">Increment</button>
    </div>

    <br><br><br>

    <h1>Dropdown Example</h1>

    <label for="options">Select an option:</label>
    <select id="options" name="selectedOption">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
    </select>

    <div id="result"></div>

    <br><br><br>

    <label for="options">Select an color:</label>
    <select id="color_options" name="selectedOption">
        <option value="red">Red</option>
        <option value="green">Green</option>
        <option value="blue">Blue</option>
    </select>

    <div id='color_result'></div>

    <br><br><br>
    <div id = 'msg'>This message will be replaced using Ajax. Click the button to replace the message.</div>
    <button onclick="getMessage()">Click Me</button>

    <script>
        function getMessage() {
            $.ajax({
                type: 'POST',
                url: '/getmsg',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    $("#msg").html(data.msg);
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $("#options").change(function() {
                var selectedOption = $(this).val();
                // alert(selectedOption);

                // Send the selected option to the server for processing
                $.ajax({
                    type: "POST",
                    url: '/test.controller-selectedOption', // Use the route name
                    data: {
                        _token: '{{ csrf_token() }}',
                        option: selectedOption
                    },
                    success: function(data) {
                        // Display the response from the server in the result div
                        $("#result").html(data.result);
                    }
                });
            });

            $("#color_options").change(function() {
                var selectedOption = $(this).val();

                // Send the selected color option to the server for processing
                $.ajax({
                    type: "POST",
                    url: "{{ route('color-option') }}", // Define this route in routes/web.php
                    data: {
                        _token: '{{ csrf_token() }}',
                        colorOption: selectedOption
                    },
                    success: function(data) {
                        // Display the response from the server in the color_result div
                        $("#color_result").html(data.colorResult);
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#incrementButton').click(function() {
                // alert('j');
                $.ajax({
                    type: 'POST',
                    url: '{{ route('increment') }}',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        $('#displayNumber').text(data.number);
                    }
                });
            });
        });
    </script>
</body>

</html>
