<template>
    <StyledContentBlock>
        <StyledRegistrationBlock>
            <div>
               <BootstrapImag
                   :src ="reguire{'@/assents/img/'}"
            </div>
            <div>
                Form
            </div>
            <div>
                Buttons
            </div>
        </StyledRegistrationBlock>
    </StyledContentBlock>
</template>

<script>
    import styled from 'vue-styled-components';
    import BootstrapImage from 'bootstrap-vue/es/components/image/img'


    const StyledContentBlock = styled('div')`
      display: grid;
      grid-template-rows: 1fr;
      justify-items: center;
    `;

    const StyledRegistrationBlock = styled('div')`
      display: grid;
      grid-template-columns: 1fr;
      grid-template-rows: 1fr 3fr 1fr;
      border-radius: 8px;
      width: 300px;
      border: 1px solid blue;
      grid-row-gap: 25px;
      padding: 15px;
    `;

    export default {
        name: 'Registration',

        components: {
            StyledRegistrationBlock,
            StyledContentBlock
        },

        data () {
            return {
                authorize: false,

                formData: {
                    login: '',
                    password: ''
                }
            };
        }

    }
</script>

<style scoped>
    .content {

    }
</style>