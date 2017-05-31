# Let's Create a Site for Houses!

No, not houses like you see on the street. Houses like you find in fantasy fiction! Whether it's the Hogwarts Houses in Harry Potter, or the Great Houses of Westeros in Game of Thrones, fantasy is full of houses, and lots of people in them. So let's make an app to help us keep them all straight.

# Things to Think About
- ER Diagrams
- What models should we have?
- What is the relationship between them?

## To Begin
- Create the databases `rake db:create`
- Run `rake`

## Hints
- Don't forget to add flash message functionality in your layout to help display errors, something like this before the yield
```ruby
<% flash.each do |key, value| %>
    <%= value %>
<% end %>
```
- Let the tests guide your code!
- An occasional sanity check of `rake db:test:prepare` couldn't hurt

## App Functionality
- A house has to have a name and references (that includes author and source material.) It can optionally have a motto.
- Visiting the `/houses` path should contain a list of houses.
- Visiting the `/houses/new` path should display a form for adding a new house.
- If an house is saved I should see the new house I've added, and if it is not saved I'm left on the `/new` page and displayed an error.
- Visiting a specific house's page should display information about that house
- Visiting the root path should display a list of all houses.

Once I have this set up I want to give visitors of my app the ability to add members they've learned about who belong to that house. Specifically I want my app to satisfy the following criteria:

- A house can have many members. Each member must be for a specific house, and have a first name, last name, and a timestamp for when they were added to the database.
- A member can only belong to one house, any members in this app must be associated to a house.
- If a member is saved, I'm redirected to the show page of the house the member belonged to, if it is not saved, I should be left on the new member form page and render errors associated with the member.
- Visiting a specific house's page should also include all of the members for a house listed below the house information
