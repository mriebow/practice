class HousesController < ApplicationController
  def new
    @house = House.new
  end

  def create
    @house = House.new(house_params)

    if @house.save
      flash[:notice] = "House added successfully."
      redirect_to @house
    else
      render action: 'new'
    end
  end

  def show
    @house = House.find(params[:id])
  end

  private
  def house_params
    params.require(:house).permit(:name, :author, :source, :motto)
  end
end
