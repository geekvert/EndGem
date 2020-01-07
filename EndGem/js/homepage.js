var start=function() {
    var addEntry=document.querySelector('.addEntry');
    var leaderboard=document.querySelector('.leaderboard');

    //1.add button
    document.querySelector('.add-btn').addEventListener('click', function(e){
        addEntry.style.display="initial";
    })

    //2.close button
    document.querySelector('.close').addEventListener('click', function(e){
        addEntry.style.display="none";
    })

    //3.close tab for add entry if clicked outside of form.
    window.onclick=function(e){
        if (e.target===addEntry){
            addEntry.style.display="none";
        }
        if (e.target==this.document.querySelector('.container')){
            leaderboard.style.display="none";
        }
    }

    //4.show leaderboard on clicking menu.
    var counter=0;

    document.querySelector('.leaderboard-btn').addEventListener('click', function(e){
        if (counter%2==0){
            leaderboard.style.display="initial";
        }
        else {
            leaderboard.style.display="none";
        }
        counter++;
    })
}
start();

var courses=document.querySelectorAll('.course');

courses.forEach(function(b){
    b.addEventListener('click', function(e){
        var cn=e.target.innerHTML;
        window.location.href="/EndGem/index.php?course="+cn;
    });
});

var download_btns=document.querySelectorAll('.download');

download_btns.forEach(function(d){
    d.addEventListener('click', function(e){
        var str=d.firstChild.id;
        //console.log(str);
        window.location.href="/EndGem/phpFiles/download.php?entryname="+str;
    });
});