	class Post {
  constructor(title, deskripsi, url_img, harga) {
    this.title = title;
    this.deskripsi= deskripsi;
    this.url_img = url_img;
    this.harga = harga;
  }
}

const app = new Vue ({
  el: '#app',
  data: {
    search: '',
    postList : [
      new Post(
        'Pantai Sudak', 
        'apik cuk', 
        '/img/pantai.jpg', 
        'Rp.10000'
      ),
      new Post(
        'Pantai kenjeran', 
        'apik cuk', 
        '/img/kenjeran.jpg', 
        'Rp.20000'
      ),
      new Post(
        'Pantai tanjung perak', 
        'apik cuk', 
        '/img/perak.jpg', 
        'Rp.30000'
      ),
]
  },
  computed: {
    filteredList() {
      return this.postList.filter(post => {
        return post.title.toLowerCase().includes(this.search.toLowerCase()) 
        || post.deskripsi.toLowerCase().includes(this.search.toLowerCase())
        || post.harga.toLowerCase().includes(this.search.toLowerCase());
      })
    }
  }
})