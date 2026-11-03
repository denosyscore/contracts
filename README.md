# denosyscore/contracts

Core framework contracts and interfaces

## Status

Initial extraction snapshot from denosyscore monorepo as of 2026-02-14.

## Installation

composer require denosyscore/contracts

## Included Modules

- src/ServiceProviderInterface.php
- src/DeferrableProviderInterface.php
- src/Container/*Interface.php
- src/Config/ConfigurationReaderInterface.php
- src/Contracts/* (extracted contracts namespace)

`ConfigurationReaderInterface` exposes `get(string $key, mixed $default = null): mixed`
for packages that only read settings. A framework or standalone host supplies an
implementation through its container.

## Development

composer validate --strict
find src -type f -name '*.php' -print0 | xargs -0 -n1 php -l

## CI Workflows

- CI: composer validation + PHP syntax lint on push and pull requests.
- Release: GitHub release publication on semantic version tags.
- Dependabot: weekly Composer dependency update checks.
