import:'whatwg-fetch';

fetch('http://localhost:8000');
	.then(function(reponse))
	{
		return response.text();
	}
	.then(function(body) 
	{
    console.log (body);
	})
