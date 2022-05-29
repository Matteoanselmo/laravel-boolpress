<template>
    <div class="col-3 ">
        <div class="card shadow p-3 mb-3">
            <img :src=" post.image_url" :alt="'image of' + post.tilte " class="rounded">
            <div class="card-body">
                <div class="card-title">
                    {{post.tile}}
                </div>
                <div class="card-subtitle">
                    {{post.author}}
                </div>
                <div class="card-text">
                    {{post.description.substring(0, 150)}}
                </div>
                <div class="card-footer">
                    {{post.created_at}}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Post',
    components: {

    },
    props: ['post']
}
</script>

<style lang='scss' scoped>

</style>
