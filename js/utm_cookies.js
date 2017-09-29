function getParams ()
{
    var result = {};
    var tmp = [];

    location.search
        .substr (1)
        .split ("&")
        .forEach (function (item) 
        {
            tmp = item.split ("=");
            result [tmp[0]] = decodeURIComponent (tmp[1]);
        });

    return result;
}

var params = getParams();
var keys = ["utm_source", "utm_medium", "utm_term", "utm_content", "utm_campaign", "gclid"];

for(var i = 0; i < keys.length; i++) {
  var key = keys[i];
  if(paramValue = params[key]) {
    cookieValue = Cookies.get(key);
    if(cookieValue && cookieValue != paramValue) {
      var combinedValue = paramValue + ';' + cookieValue;
      Cookies.set(key, combinedValue, {expires: 90, domain: 'catholicsingles.com'});
    }
    else {
      Cookies.set(key, paramValue, {expires: 90, domain: 'catholicsingles.com'});
    }
  }
}

