<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Home Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row ">
			<div class="col-lg-7" id = "Products">
			<header id = "site_header">
				<nav class="navbar navbar-light bg-light nav1 sticky">
					  <a class="navbar-brand" href="#">
					    <img src="https://scontent-maa2-1.xx.fbcdn.net/v/t1.0-9/11219587_425160724353150_1752025976610683128_n.png?_nc_cat=109&_nc_ht=scontent-maa2-1.xx&oh=2eff34b9b42852d6f9ddf53af33e83c2&oe=5CAFFDB8" width="40" height="40" class="d-inline-block align-top" alt="">
					    Makers of MilkShakes
					  </a>
					</nav>
			</header>
			<h1 align="center">Our Shakes</h1>
				<div class="row grid-padding">
					<div class="col-md-4">
						<div class="card product-card" style="width: 18rem;">
						  <img class="card-img-top" height="190rem" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtuUN_AuZfof7KhbPwe1Q4EJlMB1FF2Tj9yUDpliph7J1M31DYIw" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Chocolate</h5>
						    <h6><i class="fa fa-rupee"></i>300</h6>
						    <button class="btn btn-primary text-right" onclick="showchocolate()">View</button>
						  </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card product-card" style="width: 18rem;">
						  <img class="card-img-top" height="190rem"  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQEBUPEBIVEBAQEA8PEA8PEBAPEBUPFRUWFhUXFRUYHSggGBolHRUVITIiJSkrLi4uFx8zODMtNygtLisBCgoKDg0OFw8PFysdHR0tLS0tLS0tLSstLSstKy0tLi0tLSstLS0tLSstLS0tLS0rLS0tLS0rLS0tLS0tLS0tLf/AABEIARcAtAMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAACAAEDBAUHBgj/xABEEAABBAADBAUJBAcHBQAAAAABAAIDEQQSIQUxQVETImFxkQYHUlOBkqHB0RQyQrEjYpPCw/DxFUNjcnOi4SQzNIKy/8QAGAEBAQEBAQAAAAAAAAAAAAAAAAECAwT/xAAhEQEBAAIDAAEFAQAAAAAAAAAAAQIRAyExEiJBUWHBE//aAAwDAQACEQMRAD8A4knSCdEOnCYIggSJMAiAQIBEEgEQCqlSIJAJwFAgEVJAIgEDUlSJKkDJJ6SQJKkkkCSST0gZOnpKkCtJKkkGUE4SCcIh0QTBOEDogEwRgIHARAJgjARSARAJAIgECATgJwE4CIakqRUlSASE7GFxDRvcQB3k0ktDyewbp8VDE0W50jaHDq9Y32UCrPVT7Q8lMbBEZ5IbgbVzxyRSxiyALyuJbqQNQN6xqXcfOrC3B7EjwwOZ2IxEDXHdeUGY6crjA9q4fSufx39PgVJJwE9LIZIJ6SQJJJOgyAiCEIgqhwjCEIwgcBGAmARAIHARgJgEQQOESYJyUDhEEWIgfG4xyNLHsNOY4Frge0FAEBpqSCJABC9p5psMHY/pHUGwwvcXHcC5zWj4Fy8dS9t5scMXSv8ARc+JpHMtzH95b4+P/TKYq3fPztPpJMLh2nqMjkmI3El2VrT4Nd4lcope2870+basjPUxQRVy6vSfxF4ylnPW+gITpwE+VZA0mpSUmIQAknpJBkBEEIRBEEEYCEIwqCCMBCAjCBwiCQRNaSaALiSAGtBLiTuAA3lBY2bgJMRK2CFueV+bIzM1tlrS4gFxAugV6TyB8in7Te8v6SPDRh8cksXR524ggZWFrta1s6cK0JXrfJPyLbhCyaQ9JiQ4F1UGRAxyNc1nFxt4BPZuC9rsPGMw0j7aGMnOaVzWgXJQGd1bzQq/osXOQZvl75vocfH02GBjxscTGNuujmawU1snBrqFB+nAHQCvCs80W0AB0kkEbifuZ5HkDtIbV9nxXdtnNaGXpVkh2+xw1T4uBr25waoW2uaXK66NPnLy78l4dmPhhbO6ad8PSztLGtazWmkEGwHU6gbPV36heYBXVvO/5JSyYqLE4OCSZ0sWXE9GA4dJGGtjNb7LbB4dRvbfNdpbIxOFIGIhkhzUWmRha03qKduJ7AVqCou1eZbYLegGKeLzPkdG3hocmY+6aXFLX0P5K4tuD2Y1o+/Bgmyyn8LXdHndfbZK3h8t6xWOK+W+L6faWLl54qZo7WRu6Np91gWJSLMTqTZOpJ3k8SnpYQICekTQnKCNMiIQ0imSRAJIMQI2oQiCqDCMIQjCAwEQTBEEDhb3kRsx2Jx0LW6NikZiJHbqZG4O39pyt9qwRy3k6ADUk8AF1jzcbI+zRyPloTS5BR3tYLOXvs2fZyWbdLq3x7hmGItz7AJBaK+9xsdiNjonWHNAPC9x7CtXBFmIgDDo+MZe2h90hYmOgc00RR+B7ly8Rr7LxbXMMA6laVf5WtqLC1GGuN1eoXjNm6vor2GzWOaC0klu8WbpaxXSaLCxs61WfSOpUGIwLJw5krGvhe3IY3NDmOad9g6UrT2hwoGq5aqKRrmgNHibWrdGnyztzBMZjp8NDYjZjJ8PECbIa2VzGi+O5de24eh2PjH7gWNgvmZHNjA/3heKxGx3SeUfRvY5jJ8bLiGEtoOjbmlJHtHszC96915552wbLiw7AG9NiIxlHoMa55Pb1gzxXow5JjjZPautRw9GAgCkauLJqTZURCFFM4JFMUggdJCU6DDCMIQjCqCapAgCMIDCkijc45WgucdzWguPgFGF1nyUwDI8NGWsHXYxzjucXFoJs8d6zbprHHbG8iNi9C12InZllzZIg+iWtoEuHIm65ijzXsA9h0OnIjeEZhiIohzfYCB4KB+zWk22X3tCudu3rw+Mml+DEPjIcyTUbjxWt/bmcU9jXkjWtBfcsSPAt3GzpoQ7RWsPhWjKdddCCBaJccKuMdmdbRk9t/mt+KaUN+8SOQAB8Vk4OAZ6NkcwtVswYaOo5jVNLJj9k3WAzDQ8eaTpJHCsx8UX25lVRPsQMxH6h38tEFPHYaOEDEObnkjd1TpduGTfw30ufedzC4vFugMcTpWRRSOf0YvK55bQDd50bwHFdOma6VpYWaGt9cFRn2XO+h1QB6RqvBdscsZhZrv+MZ4zL2vm5zC05SC0jeHAgg9oKS6l51NgshwzZ3uD5zOxgLWhoDSHkg8TuC5cFHns0dMnTFEChKMhM4II06dJBiBSNQBGFUSBGEDUYQEF2HyOxLZcFEWmy1oY4cntABB8Fx4L1vm62kY8QYb6kzSa/wARuoI7avwWcp03he3SXUmEYTTuoXzQMkK5vTFuKNWRFmBbZFjeFDhXZvmtGFzRpxRoWAgytDS4vIH3nGyVeYAqzJ64KeCcD2m9UF6FoV+N/wDNLPikB3K3eVWMZRYdIaURLioTib3JmzOvh2K7SY6c/wDPPIBg42ne7EsodzHk/wA9q4+1e+88u0+kxUUA+7DG555ZpDXjTB7y8AFueOOd3RpJwkjAExR0hIQRlOiSQYQRtQBGFUSBGEDUYQGFYwGJMMrJhvje1/eAdR7RY9qrhEiu3Z2yR5m6ggPaewiwo8OTZHDSjax/ITGdJg2NO+MuhPcNW/AjwWxHo5ca9eFXsCKf3g9yvxAWs3DucJBuymxfELSbofakaqzGz+qsMBuq6tXmsb+VKvGdVZa5CJ8JF1gr+Jdqq2AGtqSYgm+Z4FEvdHGFHPIGtc46ZQdTz3BSN/ovJecvan2fAva00+VpYKNHrHJp3AuPsViZXTje39ofacVLiLsSSHJ/pt6rP9rWqk0oGo11eQQKRTJrUBWgJTFCSgJJDaSDFajCAI2qokCNqAIwgMJ0wToPcebaf/vR9rJB8QfyXtZx1gVzzzePrEOHOP5/8rok40BXLL16OO9Jmk5gdK43yWhFOxx6rg7fuIJWcw3Q4HREzYsbZBI1z20Q4AEV8RdLLv1psxO13V2E6q3SpfZW26QaOdvJ4NrUXw3KdsRDb1HcdSeaqyNfAAVfYncNUGy3l0ZcQW6kUd9c0Qbrda96M/cZ/quS+eTG5pI4uAcT7jQP4p8F1utR3rhXnNmzYyuXSO8Xlv7i1i5ct6eTajCBqMLo850JRISogShKIoSEApJJIMgIwgCMKgwpGqMI2oDCJCESD1Hm+/8AJP8AkH/0F0mX7ncVzXzfO/6sjnET4Pb9V0x33faueXrtx+Bi3j2LXd9NyyIQcw47lrvOmt1puBPisu6zErcZ4d9KmzhorUaNRf2a2mOGUt1BJN7yNa+CO9VNGP0ahLQdOzn2Uqzvsbd471wLzi/+YP8AT/iyH5rvZHwHHuXBfOK7/q2/6X8R61i48rzIRhRhGFtxOmJSQkohimKVoSVAimTpkGQEYTdE8b2u90ohG70T7pVQTUYKAMPI+BRgHkfAoownCAFECg9B5DzBuOjB/GHM/e/dXWJRRcORK4fs7F9FNHLddHIxx/yg6/C13CRwcb5gOHtCxk6cdBGdR3rXB+SxWGiO9a7DevAgcFh6Vtg+nLkrEW/uVRkrby5hm06t6639CrUO8IsbUY6iivVSg9T5UoAVWYUz6a48mOPwXz95dSZsX3RNHi57vmF3TbeI6PDyO/VyjvK+d/KDFdJipXX+PJ7gDP3VrFw5aqNKK1EHpw9bckloSUBemLkBEprQ50xegK0lHmSQdLeIX/3Y8FZw+DiH4B4JoYmhWmUozsmYSH1bfBSjAQerb4BO2lI2lQH9nYf1TfAJHZWGP903wCnFKQUgz5Nh4Q/3TfAK62mhrRuaMg7huUoARRQZzlG87v8ANwUy8awuqru0K08M9xAzDUAag2D3LKlBv8xxtaGGcC0C9fZa5PZPGlHR79Fbw+8d4VCE/kruC+8O9FjakPVCgLkc5UA/4VZjC8sJ7EUA/G/O7/I3+SsFux8Nv6NvgFa2jN0uLkf+GOoWf+u8j22nFLpi8vJd1ANkYb1TfAJjsfDeqb4BWrCVhaYUzsfDeqb4BAdkYb1bfAK6SgJQUjsfDerb4BRu2RhvVjwCuk9qjcURTOx8N6seASVklJFUGvCmY8KFrVMxqgma4KVrgoWtUrWIJWuCkBCiaxStYgMUjjdRDhvBB+KBrVJGzf3f8pViPaTesTwd1x7UWDPVUu0I/wBHGebC094cfkQocH81yerC/S0YVpbOHWWbAtbZTdfije1ufeoXyZQ53otc7wFqac6qntB1QyH9WvEgIzb08jhaIPPM6zzPFTEtCDZuGpnPUnxVl2FaeC6Tx5Kg6RqE4hg3kKV+BBGXcFSOxQNzj7dVU6T/AGmPmEukYdxCqSbHve4+zRFBsprDYs96L0saHcgc1SiKkjGVUViElN0RSRGQ0HmVBjJpW10YvmSrLSpWrKqGHxE/G/BTtdiXGhQ71eYpmJpdo8PFJXWfr3K8yM8yhYVM1yqCbH2lSNj7TxTNKlaUDYqQOireWvJ7g4bvZlHiquE+ap4mfo5+jcabKC6Ptd+IfkreF0cueno47008Ot3ZbOPYsOCrW/gHU1HTfRTDVZHlJNkw5/Wc1v5n5LVleL8V5jygm6eVmHYbDSXyEcL3fC/EKyOeV6RYCM9G3eLF+OoVjo+0qUNrRPS3I86Ex9pQmLvVjKmpVFUw96Ew96tEISEFQw96Doe9XCEJCCp0PekrWVMg8a3GM9IeKmZjY/SHig05JwRyUVYbjI/SHipmYxnpDxVRrxyHgpWSDkEF5mLZ6Q8QrDMUz0h4hUGSjsVhko7EF5mKZ6Q8VO3EM9IeKpxyDsVmN4QQbYwcWJjyF+VwOaN4OrX81hbO2vKx/QTVIWHL0sZBk04Pj08QvWscF5rab8FJmeIWyTuLjmGYUG6Z3EHQaCualalFP5TQwvyufRoGuinHj1b+CkPl3EBTHF7jQDY4334vDQvLz4fCyG5HyXGKI6Qkd1nUC+Ss4bZmBdlewOZICHBrpHtaW8w48fgU1+l3fy2T5TyahmsshpoeTQaL1PPeTp2DTet7ZOHETLec0r+tI6jq7kvM7LEEUrnMa2zbs7jmeOsAQSeB+nNe9bRFjUHUFJGbVbpm9vuuS6Zvb7rlZpMVplW6Ycj7pQmYcne6VZKEoKxlHou90oTL+q73VZJQkhBWMv6rvBN0h9F3gFZsJtEFbOfRd8ElZ0TIPEFpQlpVvp4vWM/aM+qXTQ+sZ+0Z9VFUiCmsq46aH1jP2jPqm6SI/jZ+0Z9UFXpD/NohiiFO7o/TZ77PqqeKfGPxN99n1RVuHGk7lYO0aoWbPAAkqLY+Ha9hdmBBDhYcHAScA6uz81NLBI0gGmg8WtJ0HMnS/YpsWOlfI0tN5S021ujiOXtROwskjWh7WRNyjM2Oi5zqA6xAo0BXZqosNKW3+NxO5o0A5K8x0jjZAHa5xcfgAiMvE7EgLqyvAI67QbD9b1PfyRu2Fh3ENGaHhmNloHcVoB0oP3GuPMPLQR3FprxVyHEP4sHskv8AdVhp5jG7DrrQ5mSs0bILdG41Tg7iGnwVzZ+1nluXMYpWaOjcdL7uI7V6Bz7NgZL35mgjv6pVHamy2zDrMtw3SREB48eHtKGgM27Iz/ux2OJZvrmOBWvhsWyVudhzNP8AOvJeRiweMw2Z5LXwN1f0mYAM4k8vYi2BiOjnFdSOTOXNcQA0Gy2yeXzQewJQkn+So/tkXrI/2jPqmOMi9ZH+0Z9UEhtNSj+1xesZ+0al9ri9NnvBBJRTUUH2uP02+yz8kvtTPS8GvPyVB0ko/tLOZ/ZyfRJBniMIujHJGGow1E2gjhYQ+2glrS4GyPYaQRwsMJkyhpa7LQJIO7mreGYf0h/wzwtDDEXwuzfgrIQK1PChpy8VFQ/ZCa6h1FjqqHF4AOiAMYBzXnrUity0cpEcVaEdJu70pY/0I/1T+SDEhwTox90tLesHDRrmcngcOIO5WxO4tzOacugzNFi91aLZiiPTU63OyEE0A37u6q1VbD4FpilGrbyat04poBE1razCr1F6WpJW1woCr7lBPsgmGNrHlpzuo1W/nVBL+yZulf8ApMzjG4OcRlF0B90D5oLmFa0kXu49ymha1weco6tULdxPHVYUGx8YBpK34/NWsJs3FBktzDXJWl7ibTRttxYMlzaaKc05gaPDSrVfDYNzWl0hpoPO0Ozopg9uZ9gB3AHh3IRhnSRSNkJcCG6agb+9a1Gd1V2tjoJWiIMdNTgckZNF43WRv7lDsrZuR7pHMqRwoRi3BjfqeK0vsbI442saGtA/CK619a1ZMf6aM8cgzd9FZaVaNXRrnSd1gAkEXzRYaM1L2tP5oDEegA/xPkqC15Gqv2c+5M197uamZEem1tzgyidAB1eXFQxRjJTwS0uJDmnUGqKCVo4GweSPKn6Onb70GvZWikpERZQkpKTojBbakFpkkErHOG4kdxpObOhJPebSSRR5nEUSSNNOCKyRlvTlwSSQGHO0NnTdqpGudus679UkkBWaq9NNOCMPdd2bHakkiiCIOI3Ej2pJIE0kbtO5IOIvU679UkkDAkbkwJBsE3zvVJJA4cdaJ136prNVZrleiSSIRcdNTpu1Thx5nx4pJIGv+qe0kkCtJJJVH//Z" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">StrawBerry</h5>
						    <h6><i class="fa fa-rupee"></i>300</h6>
						    <button class="btn btn-primary text-right" onclick="showstrawberry()">View</button>
						  </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card product-card" style="width: 18rem;">
						  <img class="card-img-top" height="190rem" src="data:image/jpeg;base64,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" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Vanilla</h5>
						    <h6><i class="fa fa-rupee"></i>300</h6>
						    <button class="btn btn-primary text-right" onclick="showvanilla()">View</button>
						  </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card product-card" style="width: 18rem;">
						  <img class="card-img-top" src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fbeebom-redkapmedia.netdna-ssl.com%2Fwp-content%2Fuploads%2F2016%2F01%2FReverse-Image-Search-Engines-Apps-And-Its-Uses-2016.jpg&f=1" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Interesting Drink</h5>
						    <h6><i class="fa fa-rupee"></i>300</h6>
						    <button class="btn btn-primary text-right" onclick="showItem()">View</button>
						  </div>
						</div>
					</div>
				</div>
				<div class="row grid-padding">
					<div class="col-md-4">
						<div class="card product-card" style="width: 18rem;">
						  <img class="card-img-top" src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fbeebom-redkapmedia.netdna-ssl.com%2Fwp-content%2Fuploads%2F2016%2F01%2FReverse-Image-Search-Engines-Apps-And-Its-Uses-2016.jpg&f=1" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Interesting Drink</h5>
						    <h6><i class="fa fa-rupee"></i>300</h6>
						    <button class="btn btn-primary text-right" onclick="showItem()">View</button>
						  </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card product-card" style="width: 18rem;">
						  <img class="card-img-top" src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fbeebom-redkapmedia.netdna-ssl.com%2Fwp-content%2Fuploads%2F2016%2F01%2FReverse-Image-Search-Engines-Apps-And-Its-Uses-2016.jpg&f=1" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Interesting Drink</h5>
						    <h6><i class="fa fa-rupee"></i>300</h6>
						    <button class="btn btn-primary text-right" onclick="showItem()">View</button>
						  </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card product-card" style="width: 18rem;">
						  <img class="card-img-top" src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fbeebom-redkapmedia.netdna-ssl.com%2Fwp-content%2Fuploads%2F2016%2F01%2FReverse-Image-Search-Engines-Apps-And-Its-Uses-2016.jpg&f=1" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Interesting Drink</h5>
						    <h6><i class="fa fa-rupee"></i>300</h6>
						    <button class="btn btn-primary text-right" onclick="showItem()">View</button>
						  </div>
						</div>
					</div>
				</div>
				<div class="row grid-padding">
					<div class="col-md-4">
						<div class="card product-card" style="width: 18rem;">
						  <img class="card-img-top" src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fbeebom-redkapmedia.netdna-ssl.com%2Fwp-content%2Fuploads%2F2016%2F01%2FReverse-Image-Search-Engines-Apps-And-Its-Uses-2016.jpg&f=1" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Interesting Drink</h5>
						    <h6><i class="fa fa-rupee"></i>300</h6>
						    <button class="btn btn-primary text-right" onclick="showItem()">View</button>
						  </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card product-card" style="width: 18rem;">
						  <img class="card-img-top" src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fbeebom-redkapmedia.netdna-ssl.com%2Fwp-content%2Fuploads%2F2016%2F01%2FReverse-Image-Search-Engines-Apps-And-Its-Uses-2016.jpg&f=1" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Interesting Drink</h5>
						    <h6><i class="fa fa-rupee"></i>300</h6>
						    <button class="btn btn-primary text-right" onclick="showItem()">View</button>
						  </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card product-card" style="width: 18rem;">
						  <img class="card-img-top" src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fbeebom-redkapmedia.netdna-ssl.com%2Fwp-content%2Fuploads%2F2016%2F01%2FReverse-Image-Search-Engines-Apps-And-Its-Uses-2016.jpg&f=1" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Interesting Drink</h5>
						    <h6><i class="fa fa-rupee"></i>300</h6>
						    <button class="btn btn-primary text-right" onclick="showItem()">View</button>
						  </div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 description-half" id = "Sale">
				<div class="container">

						<section id="cart"> 
						<!----      Replicate    -------------------------------------------------------->
						<?php
						
						$query1="select * from mom_menu";
						$sql1=mysqli_query($con,$query1);
						while($row1=mysqli_fetch_array($sql1)){
						echo'
							<article class="product" id = ".'.$row1['p_id'].'.">
								<header>
									<a class="remove">
										<img src='.$row1['img'].' alt="">

										<h3>Remove product</h3>
									</a>
								</header>

								<div class="content">

									<h1>'.$row1['p_name'].'</h1>

									'.$row1['description'].'

								</div>

								<footer class="content">
									<span class="qt-minus">-</span>
									<span class="qt">1</span>
									<span class="qt-plus">+</span>

									<h2 class="full-price">
										'.$row['price'].'
									</h2>

									<h2 class="price">
										'.$row['price'].'
									</h2>
								</footer>
							</article>
							
						    ';
						}
							?>
							<!----      Replicate    -------------------------------------------------------->

						</section>

					</div>

					<footer id="site-footer">
						<div class="container clearfix">

							<div class="left">
								<h2 class="subtotal">Subtotal: <span>163.96</span></h2>
								<h3 class="tax">Taxes (5%): <span>8.2</span></h3>
								<h3 class="shipping">Shipping: <span>5.00</span></h3>
							</div>

							<div class="right">
								<h1 class="total">Total: <span>177.16</span></h1>
								<a class="btn">Checkout</a>
							</div>

						</div>
					</footer>
			</div>
		</div>
	</div>
</body>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	function showItem() {
		document.getElementById('desc').style.display = "block";	
	}
	function showchocolate(){
			document.getElementById('chocolate').style.display = "block";
	}
	function showCart(){
		document.getElementById('Cart').style.display ="block";
	}
	function addChocolate(){
		document.getElementById('ChocolateDrink').style.display='block';
	}


	var check = false;

	function changeVal(el) {
	  var qt = parseFloat(el.parent().children(".qt").html());
	  var price = parseFloat(el.parent().children(".price").html());
	  var eq = Math.round(price * qt * 100) / 100;
	  
	  el.parent().children(".full-price").html( eq);
	  
	  changeTotal();			
	}

	function changeTotal() {
	  
	  var price = 0;
	  
	  $(".full-price").each(function(index){
	    price += parseFloat($(".full-price").eq(index).html());
	  });
	  
	  price = Math.round(price * 100) / 100;
	  var tax = Math.round(price * 0.05 * 100) / 100
	  var shipping = parseFloat($(".shipping span").html());
	  var fullPrice = Math.round((price + tax + shipping) *100) / 100;
	  
	  if(price == 0) {
	    fullPrice = 0;
	  }
	  
	  $(".subtotal span").html(price);
	  $(".tax span").html(tax);
	  $(".total span").html(fullPrice);
	}

	$(document).ready(function(){
	  
	  $(".remove").click(function(){
	    var el = $(this);
	    el.parent().parent().addClass("removed");
	    window.setTimeout(
	      function(){
	        el.parent().parent().slideUp('fast', function() { 
	          el.parent().parent().remove(); 
	          if($(".product").length == 0) {
	            if(check) {
	              $("#cart").html("<h1>The shop does not function, yet!</h1><p>If you liked my shopping cart, please take a second and heart this Pen on <a href='https://codepen.io/ziga-miklic/pen/xhpob'>CodePen</a>. Thank you!</p>");
	            } else {
	              $("#cart").html("<h1>No products!</h1>");
	            }
	          }
	          changeTotal(); 
	        });
	      }, 200);
	  });
	  
	  $(".qt-plus").click(function(){
	    $(this).parent().children(".qt").html(parseInt($(this).parent().children(".qt").html()) + 1);
	    
	    $(this).parent().children(".full-price").addClass("added");
	    
	    var el = $(this);
	    window.setTimeout(function(){el.parent().children(".full-price").removeClass("added"); changeVal(el);}, 150);
	  });
	  
	  $(".qt-minus").click(function(){
	    
	    child = $(this).parent().children(".qt");
	    
	    if(parseInt(child.html()) > 1) {
	      child.html(parseInt(child.html()) - 1);
	    }
	    
	    $(this).parent().children(".full-price").addClass("minused");
	    
	    var el = $(this);
	    window.setTimeout(function(){el.parent().children(".full-price").removeClass("minused"); changeVal(el);}, 150);
	  });
	  
	  window.setTimeout(function(){$(".is-open").removeClass("is-open")}, 1200);
	  
	  $(".btn").click(function(){
	    check = true;
	    $(".remove").click();
	  });
	});
</script>
</html>