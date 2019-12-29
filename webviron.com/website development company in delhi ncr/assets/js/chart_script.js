/*!
 * Chart_script.js
 * Author       : Bestwebcreator.
 * Template Name: Landing Page
 * Version      : 1.0
*/
var config = {
type: 'doughnut',
data: {
	
	datasets: [{
		data: [90, 15, 20, 15, 90],
		backgroundColor: ['#ff7876','#36ffad','#3b8a99','#13afcc','#cc1667'],
		borderColor: [
			'rgba(255,255,255,0.5)',
			'rgba(255,255,255,0.5)',
			'rgba(255,255,255,0.5)',
			'rgba(255,255,255,0.5)',
			'rgba(255,255,255,0.5)',
		],
		borderWidth: 2,
		label: 'Dataset 1'
	}],
	labels: [
		'Web Designing',
		'Google Adwords',
		'Search Engine Optimization',
		'Online Market',
		'Logo Design'
	]
},
options: {
	responsive: true,
	legend: {
	  display: false,
	},
	title: {
	  display: false,
	  text: 'Chart.js Doughnut Chart'
	},
	pieceLabel: {
		render: 'percentage',
		fontColor: ['#ff7876','#36ffad','#3b8a99','#13afcc','#cc1667'],
		fontSize: 16,
		fontStyle: 'bold',
		position: 'outside',
		precision: 2
	},
	animation: {
	  animateScale: true,
	  animateRotate: true
	}
}
};

window.onload = function() {
var ctx = document.getElementById('token_sale').getContext('2d');
window.myPie = new Chart(ctx, config);
}

