# octobercms-braddress
Extend Rainlabs' user model with brazilian address

This is an OctoberCMS plugin. It adds address fields commonly used in brazil as well as Zipcode lookup (Still in dev).
This practice is very common in brazilian sites that require address. You type in a ZIPCode and the system auto-fills details such as street name, city, state, and so on.

## WHY DO WE HAVE THIS PULGIN

As freelance developer, I constantly have to create new sites with user registration. Sites tend to share common fields and with that in mind, I thought it would be good to generate a bunch of small plugins that could, together, create a full user profile.

### The plugin roadmap

The plugin roadmap is a list of plugins that ae currently in various stages of development (from planning to used in production). As I have time to develop and debug, I will be trying to fill this out.

Here are some of the ones I have planned:

- Address - Brazilian Addresses for user
- Documents - Commonly used documents
- Social - Commonly used social fields like facebook, instagram...
- Personal - More details about user (age, sex, marital stats)

### Bare bones

The real bare bones of these plugins is to quickly extend Rainlab's User Plugin (in similar fashion to User+) with fields that are commonly used in Brazil.

At a minimum, the plugin will create the necessary fields on the user table and interface in the backend for managing this data.

I would like that the plugin also allow for masking inputs, and eventual necessary lookups and validations for specific fields.

