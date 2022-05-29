<template>
    <div class="container-fluid">
        <router-view></router-view>
        <div>

            <div class="row">
                <Post v-for="(post, index) in posts" :key="index" :post="post" />
            </div>
        </div>
    </div>
</template>

<script>
import Post from'./Post.vue';
export default {
    name: 'PostList',
    components : {
        Post,
    },
    data() {
        return{
            posts: [],
        }
    },
    methods:{
        getPost(){
            axios.get('http://localhost:8000/api/posts')
                .then(
                    (result)=>{
                        this.posts = result.data.result;
                        console.log(this.posts);
                    }
                ).catch(
                    (error) => {
                        console.error(error);
                    }
                )
        }
    },
    created(){
        this.getPost();
    }
}
</script>

<style scoped>

</style>
