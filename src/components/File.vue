<template>
    <k-block-figure
        :is-empty="!file.url"
        empty-text="Aucun fichier téléchargé …"
        @open="open"
        @update="update"
        class="k-block-type-file-wrapper"
    >
       
        <div class="k-block-type-file-icon">
            <k-icon type="download">
        </div>
        <div class="k-block-type-file-infos">
            <span>{{ file.filename }}</span>
            <span>{{ size }}</span>                
        </div>
           
    </k-block-figure>

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
    .k-block-figure-container {
        display: flex;
        align-items: center;
        background: #F7F7F7;
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