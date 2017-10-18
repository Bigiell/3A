#include <iostream>

using namespace std;

double potega_r(int n,int i){
	if(i==0)
		return 1;
	else

		return potega_r(n,i-1)*n;
	
}

int main()
{
	int n;
	int i;
	cout<<"Podaj n"<<endl;
	cin>>n;
	cout<<"Podaj potęge"<<endl;
	cin>>i;
    cout<<potega_r(n,i);

	return 0;
}