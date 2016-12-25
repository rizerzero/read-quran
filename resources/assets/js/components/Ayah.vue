<template>
    <div id="'verse-'+id" v-if="content[verseId].bn" >
        <h2>{{verseId}}. {{content[verseId].bn}}</h2>
    </div>
</template>
<script>
    export default {
        props:['verseId', 'content']
    }
</script>