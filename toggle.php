<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toggle Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .toggle-container {
            background-color: #fff;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin: 20px;
            overflow: hidden;
        }

        .toggle-title {
            cursor: pointer;
            padding: 15px 20px;
            font-weight: bold;
            color: #333;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .toggle-arrow {
            transition: transform 0.3s;
        }

        .toggle-content {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .toggle-container.open .toggle-arrow {
            transform: rotate(90deg);
        }

        .toggle-container.open .toggle-content {
            max-height: 1000px;
            transition: max-height 0.3s ease-in;
        }
    </style>
</head>
<body>
    <!-- Toggle 1 -->
    <div class="toggle-container" id="toogle1">
        <div class="toggle-title" onclick="toggle('toogle1')">
            What is Lorem Ipsum?
            <span class="toggle-arrow">▶️</span>
        </div>
        <div class="toggle-content">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
    </div>

    <!-- Toggle 2 -->
    <div class="toggle-container" id="toogle2">
        <div class="toggle-title" onclick="toggle('toogle2')">
            Why do we use Lorem Ipsum?
            <span class="toggle-arrow">▶️</span>
        </div>
        <div class="toggle-content">
        <p>Lorem Ipsum is used as placeholder text in the printing and typesetting industry. It allows designers to visualize the layout of text within a document or on a webpage without being distracted by the actual content.</p>
        </div>
    </div>
    
    
        <!-- Toggle 3 -->
    <div class="toggle-container" id="toogle3">
        <div class="toggle-title" onclick="toggle('toogle3')">
            Is Lorem Ipsum meaningful?
            <span class="toggle-arrow">▶️</span>
        </div>
        <div class="toggle-content">
        <p>No, Lorem Ipsum is not meaningful. It consists of random Latin words and does not convey any specific information. Its primary purpose is to fill space as a placeholder.</p>
    </div>
    </div>
    
    
        <!-- Toggle 4 -->
    <div class="toggle-container" id="toogle4">
        <div class="toggle-title" onclick="toggle('toogle4')">
            Can Lorem Ipsum be translated?
            <span class="toggle-arrow">▶️</span>
        </div>
        <div class="toggle-content">
        <p>Yes, Lorem Ipsum can be translated into various languages, but the translation does not add meaning to the text. It remains nonsensical in any language.</p>
        </div>
    </div></div>
    
    
        <!-- Toggle 5 -->
    <div class="toggle-container" id="toogle5">
        <div class="toggle-title" onclick="toggle('toogle5')">
            How can I generate Lorem Ipsum text?
            <span class="toggle-arrow">▶️</span>
        </div>
        <div class="toggle-content">
        <p>You can generate Lorem Ipsum text using online Lorem Ipsum generators or by copying and pasting existing Lorem Ipsum passages.</p>
        </div>
    </div></div>
    
    
            <!-- Toggle 6 -->
    <div class="toggle-container" id="toogle6">
        <div class="toggle-title" onclick="toggle('toogle6')">
            Can Lorem Ipsum be translated?
            <span class="toggle-arrow">▶️</span>
        </div>
        <div class="toggle-content">
        <p>Yes, Lorem Ipsum can be translated into various languages, but the translation does not add meaning to the text. It remains nonsensical in any language.</p>
        </div>
    </div></div>
    
    
    
            <!-- Toggle 7 -->
    <div class="toggle-container" id="toogle7">
        <div class="toggle-title" onclick="toggle('toogle7')">
            Is Lorem Ipsum meaningful?
            <span class="toggle-arrow">▶️</span>
        </div>
        <div class="toggle-content">
        <p>No, Lorem Ipsum is not meaningful. It consists of random Latin words and does not convey any specific information. Its primary purpose is to fill space as a placeholder.</p>
    </div>
    </div>

    <script>
        function toggle(toggleId) {
            const toggleContainer = document.getElementById(toggleId);
            toggleContainer.classList.toggle('open');
        }
    </script>
</body>
</html>
