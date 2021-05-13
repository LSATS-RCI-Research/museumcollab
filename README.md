# README

### What is this repository for?

This is the Omeka S customization repostiory for Lisa Young's [Museumcollab project](https://museumcollab.anthro.lsa.umich.edu) running on OpenShift. The repository is structured to be consumed by the Omeka S builder image on the OpenShift cluster.

See the git tags for released versions of the code.

### How do I get set up?

See the Omeka S development environment [setup guide](https://docs.google.com/document/d/14JyqaahYKiloywV-z1mlei578ZejVFgEF3kt0Ufa__g/edit) for instructions on how to create a local development environment.

See the Omeka S theme development [setup guide](https://docs.google.com/document/d/1M2cBtl5Ovk-DQi0iKTqtEmSG2KM_ACuoZAvVRPuHFME/edit) for instructions on how to create a new custome theme.

Since this repository already includes a custom theme, the only setup that needs to be done after cloning the repository to the development environment is installing the theme-level css development toolchain and linking the custom theme to the development environment's Omeka S instance. See the theme development setup guide for details, skipping the steps about how to derive a custom theme from an existing one.

### How do I add to the repository?

See the Omeka S theme development [documentation](https://omeka.org/s/docs/developer/themes/) for an overview of how themes work.

Place additional Omeka S themes and modules you want to include for this specific project under the `themes` and `modules` directories, respectively. The Omeka S builder image will automatically import the themes and modules located in these directories, making them available for use from the Omeka S instance admin panel alongside those bundled with the builder image.

### Who do I talk to?

- This project was for Lisa Young (lcyoung@umich.edu) in LSA Anthropology.
- The project lead was Joe Bauer (joebauer@umich.edu) on the digital scholarship team.
- The primary developer was Michael Egan (eganma@umich.edu).
- Email the research software programming team (lsats-rci-research-programming@umich.edu) for assistance.

### Contribution guidelines

This repository is configured to redeploy the project every time a commit is made to master using webhooks.

- All work should be done on the development branch, preferably using feature branches.
- The development branch should be merged into master only when pushing changes to the website.
- Track bugs and work to be done using GitLab issues.

### Programmer notes

See the base PHP builder image [documentation](https://catalog.redhat.com/software/containers/ubi8/php-73/5d400891bed8bd38099104e0?gti-tabs=unauthenticated) for more information about the `.s2i/environment` file and `php-pre-start` directory. At the time of writing, they are used to increase the PHP process allocated memory limit and increase the acceptable connection and request wait times for the Omeka S HTTP client in order to work around open issues with the OpenShift container environment for this project.

See the Omeka S builder image [repository](https://gitlab.umich.edu/jaimelm/omeka-s-s2i) for additional OpenShift builder image information and issues that may impact this project.
