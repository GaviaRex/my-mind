<!DOCTYPE html>
<html>
<head>
    Answer the questions...
</head>
<body>
    <div>
        <x-Question 
            :type="$type ?? 0"
            :content="$content ?? ''"
        />
    </div>
</body>
</html>