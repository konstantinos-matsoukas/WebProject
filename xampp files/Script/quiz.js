
function results()
{
q1=document.quiz.q1.value;
q2=document.quiz.question2.value;
q3a=document.getElementById("question3a");
q3b=document.getElementById("question3b");
q3c=document.getElementById("question3c");
q3d=document.getElementById("question3d");
q4=document.quiz.answer.value;
alert("TEST");  
c=0;
if(q1=="1b")
    c++;
if(q2=="2b")
    c++;
if(q3a.checked== true && q3b.checked==false  && q3c.checked==true && q3d.checked==true)
    c++;
if(q4=="Black Hats" || q4=="BLACK HATS" || q4=="black hats")
    c++;


}

