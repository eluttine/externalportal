# External Portal

A Nextcloud Dashboard widget providing a view of the current user's external sites. This app uses directly the sites provided by [External sites](https://apps.nextcloud.com/apps/external) API, which is thus required for meaningful usage of this app.

This app is not affiliated with the External sites app. Implementing the corresponding functionality in the External sites app would have also been a possibility - however, due to the very limited interoperability required, a separate app was chosen as a lighter solution.

## Requirements

- Nextcloud 31 or 32
- PHP 8.1+
- Node.js 20+

## Building the app

Install dependencies and build:

```bash
npm install
npm run build
```

For development with file watching:

```bash
npm run watch
```

## Linting

```bash
npm run lint
npm run stylelint
composer cs:check
composer psalm
```

