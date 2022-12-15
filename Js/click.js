var a = 0;
var txt = 'We are the only Leading Boat Safari Company in Sri Lanka with fully insured.  We have luxury boats, semi luxury boats and small ship with a resturents.  We have boat riders with much more experiance and knowledge they are very decent respectable and careful riders.  Before start each and ever tour we provide safty jackets to the passangers because we take care about passengers saftyfirst.  Our rates are very resonable and passanger can do the recervations online by paiying advance.';
var speed = 75;

function typeWriter() {
  if (a < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(a);
    a++;
    setTimeout(typeWriter, speed);
  }
}