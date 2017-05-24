remFn(10);
window.onresize = function() {
    remFn(10);
};
function remFn(num) {
    document.documentElement.style.fontSize = document.documentElement.clientWidth / num + 'px';
}