loading from LocalSorage

<script>
if (localStorage.getItem("power") !== null) {
    document.getElementsByTagName("html")[0].innerHTML=localStorage.getItem("power");
}
else {

    var pathBits = location.pathname.split('/');
    var pathCurrent = ' path=';
    document.cookie = name + '=; expires=Thu, 01-Jan-1970 00:00:01 GMT;';
    for (var i = 0; i < pathBits.length; i++) {
        pathCurrent += ((pathCurrent.substr(-1) != '/') ? '/' : '') + pathBits[i];
        document.cookie = name + '=; expires=Thu, 01-Jan-1970 00:00:01 GMT;' + pathCurrent + ';';
    }
    location.reload();
}
</script>