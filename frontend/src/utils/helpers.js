/**
 * generate formData from obj
 * @param obj
 * @returns {FormData}
 */
export function generateFormData(obj) {
    const formData = new FormData();
    Object.keys(obj).forEach(key => {
        formData.append(key, obj[key]);
    })
    return formData
}