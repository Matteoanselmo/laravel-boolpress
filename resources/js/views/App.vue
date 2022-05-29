<template>
    <div>
        <div>
            <Header/>
        </div>
        <div>
            <PostList/>
        </div>
    </div>
</template>

<script>
import PostList from'./components/PostList.vue';
import Header from './components/Header.vue'
export default {
    name: 'App',
    components : {
        PostList,
        Header
    }
}
</script>

<style scoped>

</style>
