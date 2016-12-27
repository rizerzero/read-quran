<template>
    <div class="verse"id="'verse-'+id" >
        <h2 class="translation-ar"  v-if="hasValue(verseId, 'ar')"><span class="verse-no">{{verseId}}.</span> {{content[verseId].ar}}</h2>
        <h3 class="translation" v-for="code in lang" v-if="hasValue(verseId, code)">{{content[verseId][code]}}</h3>
    </div>
</template>
<script>
    export default {
        props:['verseId', 'content', 'lang'],
        methods: {
            hasValue: function(verseId, langCode) {
                if(this.content[verseId] && this.content[verseId][langCode]) {
                    return true;
                }

                return false;
            }
        }
    }
</script>

<style>
    .verse{
        border-top:2px solid #e3e3e3;
    }
    .verse .translation{
        border-top: 1px solid #EAF2F5;
        padding-top: 10px;
        margin-left: 25px;
        margin-top: 10px;
    }

    .verse .verse-no {
        margin-right: 10px;
        color: #0086B3;
    }
    .translation-ar {
        line-height: 2.0;
        font-size: 25px;
        margin-top: 10px;
        margin-bottom: 10px;

    }
</style>