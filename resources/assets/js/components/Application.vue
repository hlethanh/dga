<template>
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="search-wrapper">
                    <input type="text" v-model="search" placeholder="Search..."/>
                </div>
                <br/>
                <div class="wrapper">
                    <ul class="card" v-for="post in filteredList">
                        <li> 
                            {{ post.title }} 
                            <small>{{ post.ref }}</small>
                        </li>
                    </ul>    
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    class Post {
      constructor( title , ref) {
        this.title = title;
        this.ref = ref;
      }
    }

    export default {
        data(){
            return{
                search: '',
                postList: [ 
                    new Post( 'Vue.js', 'vm-025377' ),
                    new Post( 'React.js', 'vm-026851' ),
                    new Post( 'Angular.js', 'vm-035687' ),
                ]
            }
        },
        mounted() {
            console.log('Component Application mounted...');
        },

        computed: {
            filteredList: function(){
                
                return this.postList.filter( post => { 
                    return post.title.toLowerCase().includes( this.search.toLowerCase() ) || post.ref.toLowerCase().includes( this.search.toLowerCase() )
                })
            }
        },

        methods:{}
    }
</script>