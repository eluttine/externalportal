import type { App } from 'vue'

declare global {
	interface Window {
		OCA: Record<string, unknown>
	}

	const OCA: {
		Dashboard: {
			register(id: string, callback: (el: HTMLElement) => App): void
		}
		Theming?: {
			color: string
		}
	}
}
