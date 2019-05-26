export const formMixin = {
    data() {
        return {
            formErrors : {}
        }
    },
    methods : {

        hasError(field, returnMessage = false, defaultMessage = null) {
            if (this.formErrors['errors']) {
                if (this.formErrors.errors[field]) {
                    return returnMessage ? this.formErrors.errors[field][0] : defaultMessage;
                } else {
                    return returnMessage ? null : defaultMessage
                }
            } else {
                return returnMessage ? null : defaultMessage
            }
        },

    }
}
