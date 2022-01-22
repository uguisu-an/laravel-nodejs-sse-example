<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SSE Example</title>
</head>

<body>
    <p>SSE Example</p>

    <script>
        $stream = new EventSource("{{ route('sse.messages.index') }}");
        $stream.addEventListener('message', ({
            data
        }) => {
            console.info(data);
        });
    </script>
</body>


</html>
