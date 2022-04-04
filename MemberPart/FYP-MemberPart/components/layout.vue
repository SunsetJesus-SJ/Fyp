
<script>
    import Header from './Header.vue' //Add header file to layout
    export default {
        components: {
            Header
        }
    }
</script>

<template>
    <div>
        <Header />
        <div class="default container mt-28" id="default">
            <router-view>
            </router-view>
        </div>
    </div>
</template>