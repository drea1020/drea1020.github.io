<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Help Me Choose an Episode</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,500;1,300;1,500&display=swap" rel="stylesheet">
	<style>
		body { background: #222; font-family: 'Work Sans', sans-serif;  font-weight: 300;}
		.answer {width: 84px;}
		.bg-red { background: #912718;}
		.text-red { color: #912718; }
	</style>
</head>

<body>
	<div class="container">
		<div class="row px-4 py-4 text-center justify-content-center">
			<div class="col-12 col-lg-6">
				<img src="img/cm.png" class="img-fluid mb-5">
				<div class="bg-white px-3 py-5 rounded-5">
					<h1 class="mb-4 h2">What episode of Criminal Minds should I watch?</h1>
					<button class="bg-red text-white px-4 py-3 h4 border-0 mb-5 rounded-5">Choose for me!</button>
					<h2 class="h1 text-center">Episode: <span class="text-red answer d-inline-block"></span></h2>
				</div>
					
			</div>
		</div>
	</div>
	
    
  
	
	
<script type="text/javascript">
let btnRandom = document.querySelector('button');
let result = document.querySelector('.answer');
let episodes = ['1x01','1x02','1x03','1x04','1x05','1x06','1x07','1x08','1x09','1x10','1x11','1x12','1x13','1x14','1x15','1x16','1x17','1x18','1x19','1x20','1x21','1x22',
'2x01','2x02','2x03','2x04','2x05','2x06','2x07','2x08','2x09','2x10','2x11','2x12','2x13','2x14','2x15','2x16','2x17','2x18','2x19','2x20','2x21','2x22','2x23',
'3x01','3x02','3x03','3x04','3x05','3x06','3x07','3x08','3x09','3x10','3x11','3x12','3x13','3x14','3x15','3x16','3x17','3x18','3x19','3x20',
'4x01','4x02','4x03','4x04','4x05','4x06','4x07','4x08','4x09','4x10','4x11','4x12','4x13','4x14','4x15','4x16','4x17','4x18','4x19','4x20','4x21','4x22','4x23','4x24','4x25','4x26','5x01','5x02','5x03','5x04','5x05','5x06','5x07','5x08','5x09','5x10','5x11','5x12','5x13','5x14','5x15','5x16','5x17','5x18','5x19','5x20','5x21','5x22','5x23','6x01','6x02','6x03','6x04','6x05','6x06','6x07','6x08','6x09','6x10','6x11','6x12','6x13','6x14','6x15','6x16','6x17','6x18','6x19','6x20','6x21','6x22','6x23','6x24','7x01','7x02','7x03','7x04','7x05','7x06','7x07','7x08','7x09','7x10','7x11','7x12','7x13','7x14','7x15','7x16','7x17','7x18','7x19','7x20','7x21','7x22','7x23','7x24','8x01','8x02','8x03','8x04','8x05','8x06','8x07','8x08','8x09','8x10','8x11','8x12','8x13','8x14','8x15','8x16','8x17','8x18','8x19','8x20','8x21','8x22','8x23','8x24','9x01','9x02','9x03','9x04','9x05','9x06','9x07','9x08','9x09','9x10','9x11','9x12','9x13','9x14','9x15','9x16','9x17','9x18','9x19','9x20','9x21','9x22','9x23','9x24','10x01','10x02','10x03','10x04','10x05','10x06','10x07','10x08','10x09','10x10','10x11','10x12','10x13','10x14','10x15','10x16','10x17','10x18','10x19','10x20','10x21','10x22','10x23','11x01','11x02','11x03','11x04','11x05','11x06','11x07','11x08','11x09','11x10','11x11','11x12','11x13','11x14','11x15','11x16','11x17','11x18','11x19','11x20','11x21','11x22','12x01','12x02','12x03','12x04','12x05','12x06','12x07','12x08','12x09','12x10','12x11','12x12','12x13','12x14','12x15','12x16','12x17','12x18','12x19','12x20','12x21','12x22','13x01','13x02','13x03','13x04','13x05','13x06','13x07','13x08','13x09','13x10','13x11','13x12','13x13','13x14','13x15','13x16','13x17','13x18','13x19','13x20','13x21','13x22','14x01','14x02','14x03','14x04','14x05','14x06','14x07','14x08','14x09','14x10','14x11','14x12','14x13','14x14','14x15','15x01','15x02','15x03','15x04','15x05','15x06','15x07','15x08','15x09','15x10' ];
function getRandomNumber(min, max) {
	let step1 = max - min + 1;
	let step2 = Math.random() * step1;
	let result = Math.floor(step2) + min;
	return result;
}
btnRandom.addEventListener('click', () => {
	let index = getRandomNumber(0, episodes.length-1);
	result.innerText = episodes[index];
});
	console.log(episodes.length);
</script>
</body>
</html>