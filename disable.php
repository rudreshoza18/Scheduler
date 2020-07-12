<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <input type="text" id="yourText" disabled />
<input type="checkbox" id="yourBox" />
<script >
    document.getElementById('yourBox').onchange = function() {
    document.getElementById('yourText').disabled = !this.checked;
};
</script>

</body>
</html>