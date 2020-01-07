document.querySelector('.small-btn').addEventListener('click', function(e){
    document.querySelector('.signup').style.display='flex';
    document.querySelector('.login').style.display='none';
});
document.querySelector('.small-btn-login').addEventListener('click', function(e){
    document.querySelector('.signup').style.display='none';
    document.querySelector('.login').style.display='flex';
});

var animation=function(){
    document.querySelector('.heading').classList.add("welcome");
}