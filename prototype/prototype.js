Vue.createApp({
	data() {
		return {
			topbarMenu: [
				{ label: 'Mon compte', href:'singular.html', icon:'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><rect x="0" fill="none" width="16" height="16"/><g><path d="M8 8c1.7 0 3-1.3 3-3S9.7 2 8 2 5 3.3 5 5s1.3 3 3 3zm2 1H6c-1.7 0-3 1.3-3 3v2h10v-2c0-1.7-1.3-3-3-3z"/></g></svg>' },
				{ label: 'Panier', href:'singular.html', icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><rect x="0" fill="none" width="16" height="16"/><g><path d="M11 12c-.6 0-1 .4-1 1s.4 1 1 1 1-.4 1-1-.4-1-1-1zm-6 0c-.6 0-1 .4-1 1s.4 1 1 1 1-.4 1-1-.4-1-1-1zm6-2H5V9h5.6c.8 0 1.5-.5 1.9-1.3L14 4H5V3c0-.6-.4-1-1-1H2v1h2v7c0 .6.4 1 1 1h7c0-.6-.4-1-1-1z"/></g></svg>' },
			],
			mainMenu: [
				{ label: 'Articles', href:'index.html' },
				{ label: 'Singular', href:'singular.html' },
			],
			footerMenu: [
				{ label: 'Contact', href:'singular.html' },
				{ label: 'Mentions légales', href:'singular.html' },
				{ label: 'Confidentialité', href:'singular.html' },
			],
			posts: [
				{
					title: 'Example post',
					url: 'singular.html',
					image: 'img/post-1.jpg'
				},
				{
					title: 'Example post',
					url: 'singular.html',
					image: 'img/post-2.jpg'
				},
				{
					title: 'Example post',
					url: 'singular.html',
					image: 'img/post-3.jpg'
				},
				{
					title: 'Example post',
					url: 'singular.html',
					image: 'img/post-4.jpg'
				},
				{
					title: 'Example post',
					url: 'singular.html',
					image: 'img/post-5.jpg'
				},
				{
					title: 'Example post',
					url: 'singular.html',
					image: 'img/post-6.jpg'
				},
			]
		}
	}
}).mount('.site');
