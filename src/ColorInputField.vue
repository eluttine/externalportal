<template>
	<div class="color-input-field">
		<label v-if="label" :for="inputId">{{ label }}</label>
		<input :id="inputId"
			ref="inputField"
			type="color"
			:value="modelValue"
			@input="$emit('update:modelValue', $event.target.value)">
	</div>
</template>

<script>
export default {
	name: 'ColorInputField',
	props: {
		modelValue: {
			type: String,
			default: '',
		},
		label: {
			type: String,
			default: '',
		},
	},
	emits: [
		'update:modelValue',
	],
	computed: {
		inputId() {
			return 'color-input-' + Math.random().toString(36).slice(2, 9)
		},
	},
	methods: {
		focus() {
			this.$refs.inputField.focus()
		},
		select() {
			this.$refs.inputField.select()
		},
	},
}
</script>

<style scoped>
.color-input-field {
	display: flex;
	align-items: center;
	gap: 8px;
}
</style>
