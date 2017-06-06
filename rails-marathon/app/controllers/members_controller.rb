class MembersController < ApplicationController
  def new
    @member = Member.new
  end

  def create
    @member = Member.new(member_params)
    if @member.save
      flash[:notice] = "House added successfully."
      redirect_to @member
    else
      render action: 'new'
    end
  end

  def show
    @member = Member.find(params[:id])
  end

  private
  def member_params
    params.require(:member).permit(:first_name, :last_name, :house)
  end
end
