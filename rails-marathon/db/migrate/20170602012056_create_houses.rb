class CreateHouses < ActiveRecord::Migration[5.0]
  def change
    create_table :houses do |t|
      t.string :name, null: false
      t.string :author, null: false
      t.string :source, null: false
      t.string :motto

      t.timestamps
    end
  end
end
