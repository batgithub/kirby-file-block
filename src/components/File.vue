<template>
    <div
        @open="open"
        @click="open"
        @update="update"
        v-bind:class="['k-block-type-file-container',{'k-block-type-file-container empty':!file.url}]"  
        
    >   
        <div class="k-block-type-file-icon">
            <k-icon type="attachment"/>
        </div>

        <div  v-if="file.url" class="k-block-type-file-infos">
            <span v-if="!content.doctitle">{{ file.filename }}</span>
            <span v-if="content.doctitle">{{ content.doctitle }}</span>
            <span>{{ size }}</span>    
        </div>

        <div v-else class="k-block-type-file-infos empty">
            <span>Aucun fichier téléchargé …</span>
            <span> Cliquez pour ajouter un fichier </span>    
        
        </div>            

    </div>

    


</template>
<script>
    export default {
        data() {
            return {
                size: null
            };
        },
        computed: {
            file() {
                return this.content.file[0] || [];
            },
        },
        watch: {
            "file.link": {
                handler (link) {
                    if (link) {
                        this.$api.get(link).then(file => {
                            this.size = file.niceSize;
                        });
                    }
                },
                immediate: true
            }
        },
    }
</script>
<style lang="scss">
    .k-block-type-file-container {
        display: flex;
        align-items: center;
        background: var(--color-background);
        padding: 0.5rem .8rem;
    }
  
    .k-block-type-file-icon {
        margin-right: 1rem;
        svg {
            width: 1.2rem;
            height: 1.2rem;
        }
    }
    .k-block-type-file-infos {
        display: flex;
        flex-direction: column;
        line-height: 1.5;
        span:last-child {
            font-size: var(--font-size-tiny);
            color: var(--color-text-light);
        }
    }
   
</style>